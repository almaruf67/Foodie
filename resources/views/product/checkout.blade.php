@extends('layouts.app')
@section('content')
    <section class="banner" style="background-image: url(https://via.placeholder.com/1920x470)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="title-area-data">
                        <h2>Cart Checkout</h2>
                        <p>A magical combination that sent aromas to the taste buds</p>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="fa-solid fa-house"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Shop Cart
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Cart Checkout
                        </li>
                    </ol>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="title-area-img">
                                <img alt="title-area-img" src="https://via.placeholder.com/230x376" />
                                <img alt="pata" class="pata" src="{{ asset('assets/img/pata.png') }}" />
                            </div>
                        </div>
                        <div class="col-6">mer_name
                            <div class="title-area-img two">
                                <img alt="title-area-img" src="https://via.placeholder.com/230x376" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gap">
        <div class="container">
            <form class="checkout-meta donate-page" action="{{ route('payment') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="pb-3">Input your Billing Information</h3>
                        <div class="col-lg-12">
                            <input type="text" class="input-text" name="name" id="customer_name" value="{{ auth()->user()->name }}" />
                            <input type="email" class="input-text" name="email" id="email" value="{{ auth()->user()->email }}" />
                            <input type="text" class="input-text" id="phone" name="phone" placeholder="Phone" value="{{ old('phone') }}"/>
                            <input type="text" class="input-text"  id="address" name="address" value="{{ old('address') }}" placeholder="Address" />

                        </div>

                        <button class="button mt-5" id="sslczPayBtn"> Place Order</button>
                   
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
