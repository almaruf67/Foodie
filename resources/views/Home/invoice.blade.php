@extends('layouts.app')
@section('content')
    <section class="banner" style="background-color: #FFDEAD;">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="title-area-data">
                        <h2>Invoice</h2>
                        <p>Details of your order</p>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="fa-solid fa-house"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item " aria-current="page">about</li>
                    </ol>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="title-area-img">
                                <img alt="title-area-img" src="{{ url('/static-image/menu1.jpg') }}">
                                {{-- <img alt="pata" class="pata" src="assets/img/pata.png"> --}}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="title-area-img two">
                                <img alt="title-area-img" src="{{ url('/static-image/shop1.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gap" >
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="printableArea">
                    <div class="card">
                        <div class="card-body">
                            <div class="container-fluid d-flex justify-content-between">
                                <div class="col-lg-3 ps-0">
                                    <a href="#" class="noble-ui-logo d-block mt-3">Noble<span>UI</span></a>
                                    <p class="mt-1 mb-1"><b>NobleUI Themes</b></p>
                                    <p>108,<br> Great Russell St,<br>London, WC1B 3NA.</p>
                                    <h5 class="mt-5 mb-2 text-muted">Invoice to :</h5>
                                    <p>{{ $info->name }},<br> {{ $info->address }}</p>
                                </div>
                                <div class="col-lg-3 pe-0">
                                    <h4 class="fw-bolder text-uppercase text-end mt-4 mb-2">invoice</h4>
                                    <h6 class="text-end mb-5 pb-4"># INV-{{ $info->id }}</h6>
                                    <h6 class="mb-0 mt-3 text-end fw-normal mb-2"><span class="text-muted">Invoice Date
                                            :</span> {{ $info->ordered_at }}</h6>

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
@endsection
@section('scripts')
<script>
  function printPageArea(areaID){
    var printContent = document.getElementById(areaID).innerHTML;
    var originalContent = document.body.innerHTML;
    document.body.innerHTML = printContent;
    window.print();
    document.body.innerHTML = originalContent;
}
</script>
@endsection
