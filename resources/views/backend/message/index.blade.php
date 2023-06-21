@extends('backend.inc.layouts')
@section('title','Orders')

@section('content')
    <div class="row pt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Orders</h4>
                    <div class="table-responsive m-t-10">
                        <div id="example23_wrapper" class="dataTables_wrapper">

                            <table id="example23"
                                   class="display nowrap table table-hover table-striped table-bordered dataTable"
                                   cellspacing="0" width="100%" role="grid" aria-describedby="example23_info"
                                   style="width: 100%;">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example23" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="">SN
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                                        aria-label="Age: activate to sort column ascending" style="">User Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending" style="">
                                        Customer Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="">
                                        Customer Email
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                                        aria-label="Age: activate to sort column ascending" style="">Message
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                                        aria-label="Start date: activate to sort column ascending"
                                        style="">Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($messages as $message)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>
                                        {{ $message->user->name ?? 'Empty'}}
                                    </td>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->message }}</td>
                                    <td><a href="" class="btn btn-info btn-sm">Mail</a></td>
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
