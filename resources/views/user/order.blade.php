@extends('admin-template.layouts.admin-app')
@section('link')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
@endsection
@section('admin-template')
    <div class="container">

        <section class="gap">
            <div class="container py-3">
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
                                                    <a href="{{ route('admininvoice', $order->id) }}" class="text-primary"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Views"><i class="bi bi-eye-fill"></i></a>
                                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Edit"><i
                                                            class="bi bi-pencil-fill"></i></a>
                                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Delete"><i
                                                            class="bi bi-trash-fill"></i></a>
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
    </div>
@endsection
