@extends('backend.inc.layouts')
@section('title','Categories')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category Table</h4>
                    <h6 class="card-subtitle"><a href="{{ route('category.categoryCreate') }}" class="btn btn-outline-info">Add Category</a></h6>
                    <div class="table-responsive m-t-40">
                        <div id="myTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="overflow-x-auto overflow-y-auto">
                                        <table id="categoryTable" class="table table-bordered table-striped dataTable no-footer"
                                               role="grid" aria-describedby="myTable_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1"
                                                    colspan="1"  aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">SN
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1"
                                                    colspan="1"  aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">Category Name
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1"
                                                    colspan="1"  aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">Category Slug
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1"
                                                    colspan="1"  aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">Status
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1"
                                                    colspan="1"  aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">Action
                                                </th>

                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($categories as $category)
                                            <tr>
                                                <td>{{ ++$loop->index }}</td>
                                                <td>{{ $category->category_name }}</td>
                                                <td>{{ $category->category_slug }}</td>
                                                <td>
                                                    <form action="{{ route('category.categoryStatus',$category->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')

                                                        @if($category->status == 'active')
                                                            <button type="submit" class="btn btn-info btn-sm">{{ucfirst($category->status)}}</button>
                                                        @else
                                                            <button type="submit" class="btn btn-warning btn-sm">{{ucfirst($category->status)}}</button>
                                                        @endif
                                                    </form>
                                                </td>
                                                <td>
                                                    <a href="{{ route('category.categoryEdit',$category->id) }}" class="btn btn-info btn-sm"><i class=" fas fa-edit"></i></a>
                                                    <form action="{{ route('category.categoryDestroy',$category->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure !')" type="submit">
                                                            <i class=" fas fa-trash-alt"></i>
                                                        </button>
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
                $('#categoryTable').DataTable();

                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
                responsive table
                $('#config-table').DataTable({
                    responsive: true
                });
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
