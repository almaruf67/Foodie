{{--@extends('layouts.app')--}}
@extends('admin-template.layouts.admin-app')

{{--@section('content')--}}
@section('admin-template')

<div class="container pb-5">

    <div class="row mb-5 pt-2">
        <div class="col-sm-12">
            <h1 class="text-center">Add New Product</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-8 offset-2">
            <a href="{{ route('product.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-8 offset-2">
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="category" class="form-label">Categories *</label>
                  <select id="category" name="category" class="form-control" aria-describedby="emailHelp" required autofocus>
                        <option value="Dessert">Dessert</option>
                        <option value="Steak">Steak</option>
                        <option value="Coffee">Coffee</option>
                        <option value="Pizza">Pizza</option>
                        <option value="Burger">Burger</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Product Name *</label>
                    <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="poster" class="form-label">Image *</label>
                    <input type="file" class="form-control" name="poster" id="poster" required>
                </div>
                <div class="mb-3">
                    <label for="des" class="form-label">Description *</label>
                    <textarea id="des" class="form-control" name="description" cols="50" rows="2"></textarea>

                  </div>
                <div class="mb-3">
                  <label for="price" class="form-label">Price *</label>
                  <input type="number" class="form-control" id="price" name="price" min="0" max="1000" step="0.05" >
                </div>

                <button type="submit" class="btn btn-primary">Add New Product</button>
            </form>
        </div>
    </div>
</div>

@endsection
