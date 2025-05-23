<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <title>Pholbari - Thanks for your order</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themes/pholbari/imgs/pholbari.png') }}" />
    <link rel="stylesheet" href="{{ asset('themes/pholbari') }}/css/main5103.css?v=6.0" />
<script>
!function(f,b,e,v,n,t,s){
    if(f.fbq)return;n=f.fbq=function(){n.callMethod ?
    n.callMethod.apply(n,arguments) : n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}
(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1730267687568116');

// Track Purchase Event
fbq('track', 'Purchase', {
    value: {{ $order->price }},
    currency: 'BDT',
    content_ids: ["{{ $order->order_id }}"],
    content_type: 'product',
    contents: [{
       id: "{{ $order->order_id }}",
       quantity: 1
    }],
    order_id: "{{ $order->order_id }}"
});
</script>
<noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=1730267687568116&ev=PageView&noscript=1" />
</noscript>
</head>

<body>
    <div class="invoice invoice-content invoice-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="invoice-inner">
                        <div class="invoice-info" id="invoice_wrapper">
                            <div class="invoice-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="logo d-flex align-items-center">
                                            <a class='mr-20' href='index.html'><img width="77"
                                                    src="{{ asset('themes/pholbari/imgs/pholbari.png') }}"
                                                    alt="logo" /></a>
                                            <div class="text">
                                                <strong class="text-brand">Pholbari</strong> <br />
                                                Jajira, Shariatpur, Dhaka, Bangladesh
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <h2>INVOICE</h2>
                                        <h6>ID Number: <span class="text-brand">{{ $order->order_id }}</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-banner">
                                <img src="{{ asset('themes/pholbari') }}/imgs/invoice/banner.png" alt="">
                            </div>
                            <div class="invoice-center">
                                <div class="table-responsive">
                                    <table class="table table-striped invoice-table">
                                        <thead class="bg-active">
                                            <tr>
                                                <th>Item Item</th>
                                                <th class="text-center">Unit Price</th>
                                                <th class="text-center">Quantity</th>
                                                <th class="text-right">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($order->products)
                                                @forelse ($order->products as $prdt)
                                                    <tr>
                                                        <td>
                                                            <div class="item-desc-1">
                                                                <span
                                                                    class="font-bd">{{ $prdt->product ? $prdt->product->product->name : 'Unknown' }}</span>
                                                                <small>SKU:
                                                                    {{ $prdt->product ? $prdt->product->product->sku : 'Unknown' }}</small>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $order->price - $order->shipping_charge }}</td>
                                                        <td class="text-center">{{ $order->admin_message }}</td>
                                                        <td class="text-right">
                                                            {{ $order->price - $order->shipping_charge }}</td>
                                                    </tr>
                                                @empty
                                                @endforelse
                                            @endif
                                            <tr>
                                                <td colspan="3" class="text-end f-w-600">SubTotal</td>
                                                <td class="text-right">{{ $order->price - $order->shipping_charge }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end f-w-600">Shipping</td>
                                                <td class="text-right">{{ $order->shipping_charge }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end f-w-600">Grand Total</td>
                                                <td class="text-right f-w-600">{{ $order->price }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="invoice-bottom pb-80">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="mb-15">Invoice Infor</h6>
                                        <p class="font-sm">
                                            <strong>Issue date:</strong>
                                            {{ $order->created_at->format('d M Y') }}<br />
                                            <strong>Invoice To:</strong>
                                            {{ $order->user ? $order->user->name : 'Unknown' }}<br />
                                            <strong>Address:</strong>
                                            {{ $order->user ? $order->user->address : 'Unknown' }}
                                        </p>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <h6 class="mb-15">Total Amount</h6>
                                        <h3 class="mt-0 mb-0 text-brand">{{ $order->price }}</h3>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="hr mt-30 mb-30"></div>
                                    <p class="mb-0 text-muted"><strong>Note:</strong>This is computer generated receipt
                                        and does not require physical signature.</p>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-btn-section clearfix d-print-none">
                            <a href="javascript:window.print()" class="btn btn-lg btn-custom btn-print hover-up"> <img
                                    src="{{ asset('themes/pholbari') }}/imgs/theme/icons/icon-print.svg"
                                    alt="" /> Print </a>
                            {{-- <a id="invoice_download_btn" class="btn btn-lg btn-custom btn-download hover-up"> <img
                                    src="{{ asset('themes/pholbari') }}/imgs/theme/icons/icon-download.svg"
                                    alt="" /> Download </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="{{ asset('themes/pholbari') }}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Invoice JS -->
    <script src="{{ asset('themes/pholbari') }}/js/invoice/jspdf.min.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/invoice/invoice.js"></script>
</body>

</html>
