@extends('layouts.app')

@section('content')
    <style>
        body {
            text-align: center;
            padding: 0;
            background: #EBF0F5;
        }

        h1 {
            color: #88B04B;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-weight: 900;
            font-size: 40px;
            margin-bottom: 10px;
        }

        .card {
            background: white;
            padding: 15px;
            border-radius: 20%;
            box-shadow: 0 2px 3px #C8D0D8;
            display: inline-block;
            margin: 0 auto;
        }
    </style>

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 my-3">
                <div class="card">
                    <div class="card">
                        <div style="border-radius:100%; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                            <i class="checkmark"
                                style="color: #9ABC66; font-size: 100px; line-height: 200px; margin-left:-15px;">✓</i>
                        </div>
                        <h1>Success</h1>
                        <p
                            style="color: #404F5E; font-family: Nunito Sans, Helvetica Neue, sans-serif; font-size:20px; margin: 0;">
                            We received your purchase request;<br /> we'll be in touch shortly!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-5">
        <a href="{{ route('home') }}" class="button" style="width: 25%">Return To Homepage</a>
    </div>
@endsection
