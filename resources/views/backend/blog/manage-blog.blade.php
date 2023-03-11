@extends('backend.inc.layouts')
@section('title','Manage Blog')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Blog Table</h4>
                    <h6 class="card-subtitle">Blog all Data</h6>
                    <div class="table-responsive m-t-40">
                        <div id="myTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="overflow-x-auto overflow-y-auto">
                                        <table id="myTable" class="table table-bordered table-striped dataTable no-footer"
                                               role="grid" aria-describedby="myTable_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1"
                                                    colspan="1"  aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">SN
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1"
                                                    colspan="1"  aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">Blog Creator
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Position: activate to sort column ascending">Blog Title
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Office: activate to sort column ascending">Date
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Age: activate to sort column ascending">Photo
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Start date: activate to sort column ascending">Description
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Salary: activate to sort column ascending">Status
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Salary: activate to sort column ascending">Action
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($blogs as $blog)
                                                <tr role="row" class="">
                                                    <td class="sorting_1">{{ $loop->iteration }}</td>
                                                    <td>{{$blog->user->name}}</td>
                                                    <td>{{$blog->title}}</td>
                                                    <td>{{date('d-M-Y',strtotime($blog->date))}}</td>
                                                    <td><img  src="/uploads/blog/{{$blog->photo}}" alt="..." style="width: 110px;"></td>
                                                    <td>{{$blog->description}}</td>
                                                    <td>
                                                        <form action="{{ route('blog.blogStatus',$blog->id) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')

                                                            @if($blog->status == 'active')
                                                                <button type="submit" class="btn btn-info btn-sm">{{ucfirst($blog->status)}}</button>
                                                            @else
                                                                <button type="submit" class="btn btn-warning btn-sm">{{ucfirst($blog->status)}}</button>
                                                            @endif
                                                        </form>
                                                    </td>

                                                    <td>
                                                        <a href="{{route('blog.edit',$blog->id)}}" class="btn btn-info btn-sm mb-1"><i class=" fas fa-edit"></i></a>
                                                        <form action="{{route('blog.destroy',$blog->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" onclick="return confirm('Are You Sure!')" class="btn btn-sm btn-danger"><i class=" fas fa-trash-alt"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script')
    <script>
        $(document).ready(function() {
            $(function () {
                $('#myTable').DataTable();

                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
                // responsive table
                // $('#config-table').DataTable({
                //     responsive: true
                // });
            });



            $.toast({
                @if(session('message'))
                heading: '{{"Faz Group Ltd"}}'
                , text: '{{ session('message') }}'
                @else
                , text: '{{"thank you for you, Visite this site."}}'
                @endif
                , position: 'top-right'
                , loaderBg: '#ff6849'

                @if(session('message'))
                , icon: '{{ session('type') }}'
                @endif
                , hideAfter: 2500
                , stack: 6
            })
        });
    </script>
@endsection
