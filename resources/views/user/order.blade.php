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
                        @php
                            $count = 1;
                        @endphp
                        <div class="table-responsive mt-3">
                            <table class="table align-middle display" id="sortable-table">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Order status</th>
                                        <th>Order Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

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
                                            <td>{{ $order->address }}</td>
                                            <td>
                                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                    <a href="{{ route('admininvoice', $order->id) }}" class="text-primary"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Views"><i class="bi bi-eye-fill"></i></a>
                                                    <!-- Button trigger modal -->
                                                    <a href="{{ route('editOrder', $order->id) }}" class="text-warning"
                                                        data-bs-toggle="tooltip" title="Edit"><i
                                                            class="bi bi-pencil-fill"></i></a>
                                                    <a class="text-danger delete-item" data-bs-toggle="tooltip"
                                                        data-id="{{ $order->id }}" data-bs-placement="bottom"
                                                        title="Delete"><i class="bi bi-trash-fill"></i></a>


                                                    @if ($active == 0)
                                                    @else
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                                            role="dialog" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Update Order</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <form method="POST"
                                                                            action="{{ route('order.update') }}">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $udata->id }}">

                                                                            <div class="form-group">
                                                                                <label for="status">Order Status</label>
                                                                                <select name="status" id="status"
                                                                                    class="form-control">
                                                                                    <option value="Processing"
                                                                                        {{ $udata->status == 'Processing' ? 'selected' : '' }}>
                                                                                        Processing</option>
                                                                                    <option value="Pending"
                                                                                        {{ $udata->status == 'Pending' ? 'selected' : '' }}>
                                                                                        Pending</option>
                                                                                    <option value="Declined"
                                                                                        {{ $udata->status == 'Declined' ? 'selected' : '' }}>
                                                                                        Declined</option>


                                                                                </select>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="address">Order Address</label>
                                                                                <textarea id="address" name="address" rows="2" cols="60">{{ $udata->address }}</textarea>
                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Save
                                                                                    changes</button>
                                                                            </div>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{ $orders->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('customJs')
    <script>
        $(document).ready(function() {
            $('.delete-item').click(function() {
                var itemId = $(this).data('id');

                $.ajax({
                    url: '/admin/delete/' + itemId,
                    type: 'get',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // Update the UI, e.g., remove the deleted item from the table
                        $('#item-' + itemId).remove();
                        window.location.reload();
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#exampleModal').modal('show');
        });
    </script>
@endsection
