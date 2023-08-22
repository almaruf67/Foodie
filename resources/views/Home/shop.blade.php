@extends('layouts.app')
@section('content')
<section class="banner" style="background-image:url(https://via.placeholder.com/1920x470)">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-7">
               <div class="title-area-data">
                  <h2>Shop</h2>
                  <p>A magical combination that sent aromas to the taste buds</p>
               </div>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html"><i class="fa-solid fa-house"></i> Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Shop</li>
               </ol>
            </div>
            <div class="col-lg-5">
               <div class="row">
                  <div class="col-6">
                     <div class="title-area-img">
                        <img alt="title-area-img" src="https://via.placeholder.com/230x376">
                        <img alt="pata" class="pata" src="assets/img/pata.png">
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="title-area-img two">
                        <img alt="title-area-img" src="https://via.placeholder.com/230x376">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="gap">
      <div class="container">
         <div class="row">
            @foreach ($items as $item)
            <div class="col-xl-4 col-md-6">
               <div class="featured-dishes">
                  <div class="featured-dishes-img">
                     <a href="{{ route('details', $item->id) }}" @style('text-decoration:none')>
                     <img alt="featured-dishes" src="{{ asset($item->Poster) }}" height="323px" width="323px">
                     </a>
                  </div>
                  <ul class="star">
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                  </ul>
                  <a href="{{ route('details', $item->id) }}" @style('text-decoration:none')><h5>{{ $item->Title }}</h5></a>
                  <p><span>$</span>{{ $item->Price }}</p>
                  <a href="{{ route('addcart', $item->id) }}">
                  <i><svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z"></path></g></svg></i></a>
               </div>
            </div>
            @endforeach
            <br>
            <div class="d-flex justify-content-center m-auto mt-5 ">
                 {{ $items->links()}}
            </div>
         </div>
      </div>
   </section>
@endsection