@extends('backend.inc.layouts')
@section('title','Show Blog')

@section('content')
    <div class="row pt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Show Blog</h4>
                    <div><a href="{{ route('blog.manageBlog') }}" class="btn btn-info">Go To Blogs Page</a></div>
                    <br>
                    <table class="table-hover table table-bordered ">
                        <tr>
                            <th class="text-info">Blog Creator</th>
                            <th class="text-info">Blog Title</th>
                            <th class="text-info">Blog Date</th>
                            <th class="text-info">Status</th>
                        </tr>
                        <tr>
                            <td>{{ $blog->user->name }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ date('d-M-y',strtotime($blog->date)) }}</td>
                            <td>{{ $blog->status }}</td>
                        </tr>
                    </table>
                    <table class="table-hover table table-bordered ">
                        <tr>
                            <th class="text-center text-info">Blog Description</th>
                        </tr>
                        <tr>
                            <td>
                                {{ $blog->description}}
                            </td>
                        </tr>
                    </table>
                    <table class="table-hover table table-bordered ">
                        <tr>
                            <th class="text-center text-info">Blog Photo</th>
                        </tr>
                        <tr>
                            <td class="text-center"><img style="width: 50%; " src="/uploads/blog/{{ $blog->photo }}" alt="..."></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('script')
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    </script>
@endsection
