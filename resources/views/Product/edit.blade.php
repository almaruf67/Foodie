{{--@extends('layouts.app')--}}
@extends('admin-template.layouts.admin-app')

{{--@section('content')--}}
@section('admin-template')

    <div class="container pb-5">

        <div class="row mb-5 pt-2">
            <div class="col-sm-12">
                <h2 class="text-center">Update Product Info.</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2">
                <a href="{{ route('product.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="category" class="form-label">Category *</label>
                        <select id="category" name="category" class="form-control" aria-describedby="emailHelp" required autofocus>
                            <option value="Dessert" {{ ($product->Category === 'Dessert') ? "selected" : '' }}>Dessert</option>
                            <option value="Steak" {{ ($product->Category === 'Steak') ? "selected" : '' }}>Steak</option>
                            <option value="Coffee" {{ ($product->Category === 'Coffee') ? "selected" : '' }}>Coffee</option>
                            <option value="Pizza" {{ ($product->Category === 'Pizza') ? "selected" : '' }}>Pizza</option>
                            <option value="Burger" {{ ($product->Category === 'Burger') ? "selected" : '' }}>Burger</option>
                        </select>

{{--                        <select class="form-control" name="category">--}}
{{--                            <option value="0">Please Select the Category</option>--}}
{{--                            @foreach ( $products as $product)--}}
{{--                                <option value="{{$product->id}}"--}}

{{--                                        @if($product->id!=null)--}}
{{--                                            selected--}}
{{--                                    @endif--}}

{{--                                >{{ $product->Category }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Product Name *</label>
                        <input value="{{$product->Title }}" type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" required autofocus>
                    </div>

                    <div class="mb-3">
                        <img style="width: 100px;" src="{{ $product->Poster }}" alt="">
                        <br>
                        <label for="poster" class="form-label">Old Image </label>
                        <input type="file" class="form-control" name="poster" id="poster">





{{--                        <label>Image</label>--}}
{{--                        <br>--}}
{{--                        @if ( $product->Poster == NULL )--}}
{{--                            No Image Uploaded.--}}
{{--                        @else--}}
{{--                            <img style="width: 100px;" src="{{ $product->Poster }}" alt="">--}}
{{--                        @endif--}}
{{--                        <br><br>--}}
{{--                        <input  type="file" name="poster" class="form-control-file">--}}
                    </div>


                    <div class="mb-3">
                        <label for="des" class="form-label">Description *</label>
                        <textarea id="des" class="form-control" name="description" cols="50" rows="2">{{$product->Description}}</textarea>

                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price *</label>
                        <input value="{{$product->Price}}" type="number" class="form-control" id="price" name="price" min="0" max="1000" step="0.05" >
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>

@endsection
