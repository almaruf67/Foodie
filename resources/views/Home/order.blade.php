@extends('layouts.app').
@section('link')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
@endsection
@section('content')
    <section class="banner" style="background-color: #FFDEAD;">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="title-area-data">
                        <h2>Total Orders</h2>
                        <p>Here are your orders</p>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="fa-solid fa-house"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">about</li>
                    </ol>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="title-area-img">
                                <img alt="title-area-img" src="{{ url('/static-image/menu1.jpg') }}">
                                <img alt="pata" class="pata" src="assets/img/pata.png">
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

    <section class="gap">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0">Order Details</h5>
                        <form class="ms-auto position-relative">
                            <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                                <i class="bi bi-search"></i>
                            </div>
                            <input class="form-control ps-5" type="text" placeholder="search" />
                        </form>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table align-middle">
                            <thead class="table-secondary">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Order status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3 cursor-pointer">

                                                <div class="">
                                                    <p class="mb-0">{{ $order->name }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->ordered_at }}</td>
                                        <td>{{ $order->amount }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="{{ route('invoice', $order->id) }}" class="text-primary"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i
                                                        class="bi bi-eye-fill"></i> Invoice</a>
                                                {{-- <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title="Edit"><i
                                                        class="bi bi-pencil-fill"></i></a>
                                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title="Delete"><i
                                                        class="bi bi-trash-fill"></i></a> --}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
