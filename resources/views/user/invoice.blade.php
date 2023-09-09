@extends('admin-template.layouts.admin-app')
@section('link')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
@endsection
@section('admin-template')
    <div class="container">

      <section class="gap" >
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12" id="printableArea">
                        <div class="card">
                            <div class="card-body">
                                <div class="container-fluid d-flex justify-content-between">
                                    <div class="col-lg-3 ps-0">
                                        <a href="#" class="noble-ui-logo d-block mt-3">Noble<span>UI</span></a>
                                        <p class="fw-bolder mt-1 mb-1"><b>NobleUI Themes</b></p>
                                        <p>108,<br> Great Russell St,<br>London, WC1B 3NA.</p>
                                        <p class="mt-1 mb-1"><b>Status</b> <span class="btn btn-secondary rounded p-1">{{ $info->status }}</span></p>
                                        <h5 class="mt-5 mb-2 text-muted">Invoice to :</h5>
                                        <p>{{ $info->name }},<br> {{ $info->address }}</p>
                                    </div>
                                    <div class="col-lg-3 pe-0">
                                        <h4 class="fw-bolder text-uppercase text-end mt-4 mb-2">invoice</h4>
                                        <h6 class="text-end mb-5 pb-4">Order #{{ $info->id }}</h6>
                                        <h6 class="mb-0 mt-3 text-end fw-normal mb-2"><span class="text-muted">Invoice Date
                                                :</span> {{ $info->ordered_at }}</h6>
                                        <h5 class="text-uppercase text-end mt-4 mb-2">Transaction:</h5>
                                        <p class="text-muted text-end">{{ $info->transaction_id }}</p>
                                    </div>
                                </div>
                                <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                                    <div class="table-responsive w-100">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Product</th>
                                                    <th class="text-end">Quantity</th>
                                                    <th class="text-end">Unit cost</th>
                                                    <th class="text-end">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 0;
                                                    $sum = 0;
                                                @endphp
                                                @foreach ($order_details as $key => $item)
                                                    <tr class="text-end">
                                                        <td class="text-start">@php
                                                            echo ++$i;
                                                        @endphp</td>
                                                        <td class="text-start">{{ $item->product_name }}</td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>৳{{ $item->products->Price }}</td>
                                                        <td>৳{{ $item->quantity * $item->products->Price }}</td>
                                                        @php
                                                            $sum += $item->quantity * $item->products->Price;
                                                        @endphp
                                                    </tr>
                                                @endforeach
                                            </tbody>
    
                                        </table>
                                    </div>
                                </div>
                                <div class="container-fluid mt-5 w-100">
                                    <div class="row">
                                        <div class="col-md-6 ms-auto">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Sub Total</td>
                                                            <td class="text-end">৳ {{ $sum }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>TAX (12%)</td>
                                                            <td class="text-end">৳ {{ $sum * 0.12 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold-800">Total</td>
                                                            <td class="text-bold-800 text-end"> ৳ {{ $sum + $sum * 0.12 }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid w-100">
                      <a href="javascript:;" class="btn btn-primary float-end mt-4 ms-2"><i data-feather="send"
                              class="me-3 icon-md"></i>Send Invoice</a>
                      <a href="javascript:void(0);" onclick="printPageArea('printableArea')" class="btn btn-outline-primary float-end mt-4"><i
                              data-feather="printer" class="me-2 icon-md"></i>Print</a>
                  </div>
                </div>
            </div>
            
        </section>
    </div>
@endsection
@section('customJs')
<script>
  function printPageArea(areaID){
    var printContent = document.getElementById(areaID).innerHTML;
    var originalContent = document.body.innerHTML;
    document.body.innerHTML = printContent;
    window.print();
    document.body.innerHTML = originalContent;
}
</script>
