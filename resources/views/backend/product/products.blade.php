@extends('backend.inc.layouts')
@section('title','Products')

@section('content')
    <div class="row pt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Products</h4>
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
                                        aria-label="Office: activate to sort column ascending" style="">
                                        Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="">
                                        Title
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="">
                                        Price
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="">
                                        Discount
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="">
                                        Quantity
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="">
                                        Photo
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                                        aria-label="Start date: activate to sort column ascending"
                                        style="">Status
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1"
                                        aria-label="Start date: activate to sort column ascending"
                                        style="">Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->product_title }}</td>
                                    <td> ${{ $product->product_price }}</td>
                                    <td> @if($product->product_discount == null) {{ 'no discount' }} @else  ${{ $product->product_discount }} @endif</td>
                                    <td>{{ $product->product_quantity }}</td>
                                    <td>
                                        <img src="/uploads/product/{{$product->product_photo}}" alt="..." style="width: 110px;"/>
                                    </td>
                                    <td>
                                        <form action="{{ route('product.productStatus',$product->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            @if($product->status == 'active')
                                                <button type="submit"
                                                        class="btn btn-info btn-sm">{{ucfirst($product->status)}}</button>
                                            @else
                                                <button type="submit"
                                                        class="btn btn-warning btn-sm">{{ucfirst($product->status)}}</button>
                                            @endif
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('product.show',$product->id) }}" class="btn btn-success btn-sm m-1"><i class="mdi mdi-eye"></i></a>
                                        <a href="{{ route('product.edit',$product->id) }}"  class="btn btn-info btn-sm m-1"><i class="mdi mdi-account-edit"></i></a>
                                        <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are You Sure!')"
                                                    class="btn btn-sm btn-danger m-1"><i class="mdi mdi-delete-forever"></i>
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
