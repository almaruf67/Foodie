@extends('admin-template.layouts.admin-app')
@section('admin-template')

    <div class="container">

        <div class="row mb-2 pt-2">
            <div class="col-sm-12">
                <h2 class="text-center">Manage All Product Information</h2>
            </div>
        </div>
        <!-- Create Button -->
        <div class="row pt-5">
            <div class="col-12">
                <a href="{{ route('product.create') }}" type="button" class="btn btn-primary float-end">Add New Product</a>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                            <thead>
                                <th>SL.</th>
                                <th>Category</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description </th>
                                <th>Price</th>
                                <th>Action</th>
                            </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->Category }}</td>
                                <td>{{ $product->Title }}</td>
                                <td><img style="width: 100px;" src="{{ asset( $product->Poster) }}" alt=""></td>
                                <td>{{ $product->Description }}</td>
                                <td>{{ $product->Price }}</td>
                                <td>
                                    <form action="{{ route('product.destroy', $product->id) }}" method="post" style="display: inline-block;">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                                    <!-- <a href="{{ route('product.show', $product->id) }}" class="btn btn-info">Show</a> -->
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
