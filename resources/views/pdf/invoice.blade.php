<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice</title>
    <style>
        .th{
            color: #00124E;
            font-weight: bold;
        }
        .tr{
            align-items: center;
        }
        .table {
            border-collapse: collapse;
            width: 100%;
            margin: 10px 0;
        }

        .th, .td {
            text-align: left;
            padding: 8px;
        }

        .th {
            background-color: #ddd;
        }

        .tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="">
            <div class="col-lg-12 text-center">
                <div class="">
                    <table class="table">
                        <tr class="tr">
                            <th class="th">Product Photo</th>
                            <th class="th">Product name</th>
                            <th class="th">Product Qty</th>
                            <th class="th">Product Price</th>
                        </tr>
                        <?php $subtotal = 0; $total = 0; $totalDiscount = 0; ?>
                        @foreach($orders as $order)
                            @php
                                $discount = $order->product_price * ($order->product_discount / 100);
                                $discountedPrice = $order->product_price - $discount;
                            @endphp
                            <?php
                            if ($order->product_discount > 0) {
                                $price = $discountedPrice;
                            } else {
                                $price = $order->product_price;
                            }
                            if ($order->product_discount > 0) {
                                $discount = $order->product_discount;
                            } else {
                                $discount = 0;
                            }
                            $total += $price * $order->product_qty;
                            $totalDiscount += $discount * $order->product_qty;
                            $subtotal += $order->product_price * $order->product_qty;
                            ?>
                        <tr class="tr">
                            <td class="td"><img style="width: 120px; height: auto;" src="{{ public_path('/uploads/product/'.$order->product_photo) }} {{--/uploads/product/{{$order->product_photo}}--}}" alt="..."></td>
                            <td class="td">{{ $order->product_name }}</td>
                            <td class="td">{{ $order->product_qty }}</td>
                            <td class="td">{{ $order->product_price }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
    </div>


    <h2 style="color: #00124E;">Payment info</h2>

    <div class="">
        <div class="">
            <table>
                <tr>
                    <td><div style="font-weight: bold; color: #00124E;">Name </div></td>
                    <td class="px-3">:</td>
                    <td>{{ auth()->user()->name }}</td>
                </tr>
                <tr>
                    <td><div style="font-weight: bold; color: #00124E;">Email </div></td>
                    <td class="px-3">:</td>
                    <td>{{ auth()->user()->email }}</td>
                </tr>
                <tr>
                    <td><div style="font-weight: bold; color: #00124E;">Subtotal </div></td>
                    <td class="px-3">:</td>
                    <td>${{ $subtotal }}</td>
                </tr>
                <tr>
                    <td><div style="font-weight: bold; color: #00124E;">Discount </div></td>
                    <td class="px-3">:</td>
                    <td>-${{ $totalDiscount }}</td>
                </tr>
                <tr>
                    <td><div style="font-weight: bold; color: #00124E;">Grand total </div></td>
                    <td class="px-3">:</td>
                    <td>${{ $total }}</td>
                </tr>
                <tr>
                    <td><div style="font-weight: bold; color: #00124E;">Paid By </div></td>
                    <td class="px-3">:</td>
                    <td>{{ $order->payment_status }}</td>
                </tr>
                <tr>
                    <td><div style="font-weight: bold; color: #00124E;">Payment Status </div></td>
                    <td class="px-3">:</td>
                    <td>{{ ucwords($order->delivery_status) }}</td>
                </tr>
            </table>
        </div>
    </div>

</div>

</body>
</html>
