<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">

       .invoice-pp *{
           font-family: 'Rubik',Helvetica,Arial,sans-serif;
        }
        .invoice-pp{
           padding-left: 30px;
           padding-right: 30px;
        }
        .invoice-pp.first-pp .brand-logo{
            margin: 0 auto;
        }
        .invoice-pp.first-pp {
            text-align: center;
        }
        .customer_infos br:nth-last-of-type(2) {
           display:none!important;
        }
        .p-0{
           padding: 0!important;
        }
        .pr-0{
           padding-right: 0!important;
        }
        .pl-0{
           padding-left: 0!important;
        }
        .invoice-cal-wrapper {
           display: flex;
           flex-wrap: wrap;
           justify-content: space-between;
        }

        .invoice-cal-left {
           width: 70%;
           padding-right: 15px;
        }

        .invoice-cal-right {
           width: 29%;
           padding-left: 15px;
        }

        .invoice-tables-inner {
           /*border: 2px solid #000000;*/
           border-bottom: 0;
           margin-bottom: 50px;
        }

        .invoice-cal-left td {
           padding-left: 20px!important;
           /*padding-right: 20px!important;*/
           padding-top: 10px!important;
           border-bottom: 1px solid #d2d2d2!important;
           border-top: 1px solid #d2d2d2!important;
        }

        .invoice-cal-right th,.invoice-cal-right td{
           padding-right: 20px!important;
           border-top: 1px solid #d2d2d2!important;
        }

        .invoice-cal-right th {
           border-bottom: 0!important;
           /*padding-left: 20px!important;*/
           /*border-left: 1px solid #000000!important;*/
        }
        .invoice-tables-inner .table.table-responsive.table-slim th,.invoice-tables-inner .table.table-responsive.table-slim td {
           border-bottom: 1px solid #000000;
           border-right: 1px solid #000000;
           text-align: center;
        }

        .invoice-tables-inner .table.table-responsive.table-slim td:last-child,.invoice-tables-inner .table.table-responsive.table-slim th:last-child {
           border-right: 0;
        }
        th.s-hide small{
           display: none;
        }

        .invoice-tables-inner .table.table-responsive.table-slim td:first-child, .invoice-tables-inner .table.table-responsive.table-slim th:first-child {
           /*text-align: initial;*/
        }
        .invoice-tables-inner .table.table-responsive.table-slim th {
           border-top: 0!important;
        }
        .footer-note{
           padding:  5px 10px;
        }
        .invoice-main-table th,
        .invoice-main-table td{
           vertical-align: middle!important;
        }
        .footer-note *{
           text-transform: uppercase;
           line-height: 1.5;
           font-size: 9px;
           text-align: justify;
           color: #1a1a1a;
           margin:0;
        }
        table th {
           font-size: 13px;
        }
        .invoice-main-table td,.invoice-main-table th {
           border: 1px solid #000000;
           text-align: center;
        }
        body {
        color: #000000;
        }
        .invoice-main-table .bg-a,
        .top-info.word-wrap .m-title{
        background-color: #b9d2cf !important;
        -webkit-print-color-adjust: exact;
        }
        .top-info.word-wrap {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .top-info.word-wrap .inner-wrap {
            padding: 5px 15px 7px;
            display: inline-block;
            border-top: 1px solid #000;
            line-height: 1.1;
            width: 100%;
        }
        .top-info.word-wrap .text-left {
            width: 45%;
            border: 1px solid #000000;
        }
        .top-info .pull-middle {
            width: 19%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .top-info .pull-middle .m-title {
            border-bottom: 1px solid #000;
        }

        .top-info .pull-middle .word-wrap {
            border: 1px solid #000000;
            display: block;
        }
        .top-info .pull-middle .word-wrap:first-child {
            margin-bottom: 0px;
        }
        .top-info.word-wrap .text-right {
            max-width: 40%;
            border: 1px solid #000000;
        }
        .top-info.word-wrap .m-title {
            display: block;
            padding: 0px 15px;
            background: #f0f0f0;
            font-size: 15px;
            font-weight: 600;
        }
        .invoice-header-text{
            width: 100%;
        }

    </style>

  </head>

  <body>

    <div class="invoice-container container pt-5">
        <div class="row invoice-main-content">
            <div class="invoice-main-content-inner col-md-8 col-md-offset-2 col-sm-12 m-auto" style="border: 1px solid #ccc;">
                <div id="invoice_content">
                    <!-- business information here -->
                    <div class="row invoice-pp first-pp">
                        <!-- Logo -->
                        <img class="brand-logo" style="max-height: 100px; width: 200px;" src="https://banggomart.com/frontend/v-2/assets/images/banggomart.png" />

                        <!-- Header text -->

                        <!-- business information here -->
                        <div class="col-xs-12 text-center invoice-header-text">
                            <!-- Address -->
                            <p class="invoice-header-text" style="margin-bottom: 30px; margin-top: 15px; font-size: 12px;">
                                <span class="text-center">
                                    <b>House # 16 (1ST Floor), Road # 09, Sector # 01, Uttara Model Town, Dhaka-1230</b>
                                </span>
                                <br />
                                <span>
                                    <b>fmcargoworld@gmail.com</b>
                                </span>
                                <br />
                                <span>
                                    <b>01688-801343, 01511-027225</b>
                                </span>
                            </p>
                            <div class="invoice-tables-outer">
                                <table class="invoice-main-table" style="margin-bottom: 20px; border: 1px solid #000;width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="bg-a text-uppercase text-center" width="5%" style="background: #f0f0f0; padding-top: 5px; padding-bottom: 5px;">
                                                Customer Info
                                            </th>
                                            <th class="bg-a text-uppercase text-center" width="5%" style="background: #f0f0f0; padding-top: 5px; padding-bottom: 5px;">
                                                Order Date
                                            </th>
                                            <th class="bg-a text-uppercase text-center" width="5%" style="background: #f0f0f0; padding-top: 5px; padding-bottom: 5px;">
                                                Invoice No.
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="padding-top: 5px; padding-bottom: 5px;">
                                                <span class="customer_infos">
                                                    <b>Name:</b> {{ $order->billing?->full_name }}
                                                    <span style="display: block; margin-top: 5px;">
                                                        <b>Address:</b> {{ $order->billing?->address }}
                                                    </span>
                                                    <span style="display: block; margin-top: 3px;">
                                                        <b>Email:</b> {{ $order->billing?->email }}
                                                    </span>
                                                </span>
                                            </td>
                                            <td style="padding-top: 5px; padding-bottom: 5px;">
                                                {{ $order->created_at->format('m/d/Y') }}
                                            </td>
                                            <td style="padding-top: 5px; padding-bottom: 5px;">
                                                {{ $order?->invoice_id }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Invoice number, Date  -->
                            {{-- <p style="width: 100%;" class="top-info word-wrap">
                                <span style="width: 50%;">
                                    <span class="m-title">Customer Info</span>
                                    <span class="inner-wrap">
                                        <!-- customer info -->
                                        <span style="display: block; margin-top: 5px;"></span>
                                        <span class="customer_infos">
                                            {{ $order->billing?->full_name }}
                                            <span style="display: block; margin-top: 5px;">
                                                <b>Address:</b> {{ $order->billing?->address }}
                                            </span>
                                            <span style="display: block; margin-top: 3px;">
                                                <b>Email:</b> {{ $order->billing?->email }}
                                            </span>
                                        </span>
                                    </span>
                                </span>
                                <span style="width: 50%;">
                                    <span class="word-wrap">
                                        <span class="m-title">Date</span>
                                        {{ $order->created_at->format('m/d/Y') }}
                                    </span>
                                    <span class="word-wrap">
                                        <span class="m-title">Invoice#</span>
                                        {{ $order?->invoice_id }}
                                    </span>
                                </span>
                            </p> --}}
                        </div>
                    </div>

                    <div class="invoice-tables-outer" style="padding: 0 15px;">
                        <div class="invoice-tables-inner">
                            <table class="invoice-main-table" style="margin-bottom: 0px; border: 1px solid #000;width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="bg-a text-uppercase text-center" width="5%" style="background: #f0f0f0; padding-top: 5px; padding-bottom: 5px;">Qty.</th>
                                        <th class="bg-a text-uppercase text-center" width="15%" style="background: #f0f0f0; padding-top: 5px; padding-bottom: 5px;">Item Name</th>
                                        <th class="bg-a text-uppercase text-center" width="10%" style="background: #f0f0f0; padding-top: 5px; padding-bottom: 5px;">Price</th>
                                        <th class="bg-a text-uppercase text-center" width="10%" style="background: #f0f0f0; padding-top: 5px; padding-bottom: 5px; padding-right: 0px;">Qty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $sum = 0;
                                    $qty = 0;
                                @endphp
                                @foreach($order->orderDetails as $data)
                                    <tr>
                                        <td class="text-uppercase text-center" width="5%" style="padding-top: 5px; padding-bottom: 5px;">
                                            {{ $loop->index+1 }}
                                        </td>
                                        <td class="text-uppercase text-center" width="10%" style="padding-top: 5px; padding-bottom: 5px;">
                                            {{ $data->product?->name }}
                                        </td>
                                        <td style="padding-top: 5px; padding-bottom: 5px;" class="text-center">{{ $totalPrice = $data?->price }} Tk.</td>
                                        <td style="padding-top: 5px; padding-bottom: 5px; padding-right: 0px;" class="text-center">{{ $totalQty = $data?->qty }}</td>
                                    </tr>

                                    @php
                                        $sum += $totalPrice;
                                        $qty += $totalQty;
                                    @endphp

                                @endforeach
                                    <tr>
                                        <td>
                                        </td>
                                        <th class="text-uppercase">
                                            Subtotal
                                        </th>
                                        <td colspan="2">
                                            <b>{{ $sum }} Tk.</b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $('.invoice-print-btn').click(function(){
            window.print();
        })
    </script>

  </body>
</html>
