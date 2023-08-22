@extends('layouts.app')
@section('content')
<section class="banner" style="background-image:url(https://via.placeholder.com/1920x470)">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-7">
            <div class="title-area-data">
               <h2>Product Details</h2>
               <p>A magical combination that sent aromas to the taste buds</p>
            </div>
            <ol class="breadcrumb">
               <li class="breadcrumb-item">
                 <a href="index.html"><i class="fa-solid fa-house"></i> Home</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Shop</li>
               <li class="breadcrumb-item active" aria-current="page">Product Details</li>
            </ol>
         </div>
         <div class="col-lg-5">
            <div class="row">
               <div class="col-6">
                  <div class="title-area-img">
                     <img alt="title-area-img" src="https://via.placeholder.com/230x376">
                     <img alt="pata" class="pata" src="{{ asset("assets/img/pata.png") }}">
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
<section class="gap featured-dishes-product-detail-img">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-6">
            <div class="featured-dishes product-detail-img">
               <div class="sale">
                  <h6>Sale</h6>
               </div>
               <div class="featured-dishes-img">
                  <img alt="featured-dishes" src="{{ asset("$product->Poster") }}" width="400px">
               </div>
            </div>
         </div>
         <div class="col-xl-6">
            <div class="available">
               <span>
                  <i class="fa-solid fa-check"></i>
                  available
               </span>
               <ul class="star">
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                  </ul>
               <h6>( 1 Review )</h6>
            </div>
            <div class="product-info ">
               <h3>
                  {{ $product->Title }}
               </h3>
               <form class="variations_form">
                  <div class="deal-week mb-4 d-flex align-items-center"><h2 class="m-0"><span>$</span> {{ $product->Price }}</h2></div>
                 
                  <div class="d-flex align-items-center mt-4">
                     <a href="{{ route('addcart', $product->id) }}" class="button">Add to Cart</a>
                  </div>
                  <ul class="product_meta">
                   <li><span class="theme-bg-clr">Tags:</span>
                     <ul class="pd-tag">
                        <li>
                          <a href="#" class="ps-0">featured products</a>
                          ,<a href="#">meat</a>
                          ,<a href="#">new products</a>
                        </li>    
                     </ul>
                   </li>
                 </ul>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="about-chef">
   <div class="container">
      <h2 class="pb-3">Description</h2>
      <p>
         {{ $product->Description }}
      </p>
      
   </div>
</div>
<section>
   <div class="container">
      <div class="benefits">
         <div>
            <h2 class="pb-3">Benefits</h2>
            <ul class="quality-foods">
                  <li><img alt="img" src="{{ asset("assets/img/check.png") }}"><h6>Quality foods natural gradient</h6></li>
                  <li><img alt="img" src="{{ asset("assets/img/check.png") }}"><h6>A melting pot of cheese served with our Little Soul</h6></li>
                  <li><img alt="img" src="{{ asset("assets/img/check.png") }}"><h6>Award-winning Restaurant</h6></li>
                  <li><img alt="img" src="{{ asset("assets/img/check.png") }}"><h6>caramelised balsamic onions</h6></li>
                  <li><img alt="img" src="{{ asset("assets/img/check.png") }}"><h6>Healthy Food 100% Organic Food</h6></li>
                  <li><img alt="img" src="{{ asset("assets/img/check.png") }}"><h6>roasted on a skewer, hanging above a spicy chilli seafood</h6></li>
                  <li><img alt="img" src="{{ asset("assets/img/check.png") }}"><h6>individually styled bedrooms</h6></li>
               </ul>
         </div>
         <div class="benefit-img">
            <img alt="benefit" src="https://via.placeholder.com/572x559">
         </div>
      </div>
   </div>
</section>
<section class="gap no-top">
   <div class="container">
      <div class="review">
              <h3>Review</h3>
              <div class="single-comment">
                    <img alt="img" src="https://via.placeholder.com/160x160">
                    <div class="ps-md-4">
                      <div class="d-flex align-items-center">
                        <h4>Smith Johnson</h4>   
                        <span>Jun 07, 2023</span>
                        </div>
                        <p>Integer sollicitudin ligula non enim sodales non lacinia commodo tempor mod licitudin. Integer sollicitudin ligula non enim sodales non lacinia commodo tempor mod licitudin.</p>
                    </div>
                    <ul class="star">
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                  </ul>
                  </div>
                  <div class="single-comment">
                    <img alt="img" src="https://via.placeholder.com/160x160">
                    <div class="ps-md-4">
                      <div class="d-flex align-items-center">
                        <h4>Smith Johnson</h4>
                        <span>Jun 07, 2023</span>
                        </div>
                        <p>Integer sollicitudin ligula non enim sodales non lacinia commodo tempor mod licitudin. Integer sollicitudin ligula non enim sodales non lacinia commodo tempor mod licitudin.</p>
                    </div> 
                    <ul class="star">
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                     <li><i class="fa-solid fa-star"></i></li>
                  </ul>
                  </div>
                  <form class="add-review leave-comment">
                    <div class="rating">
                      <h3>Add Review</h3>
                      <div class="d-flex align-items-center">
                      <span>Your Rating</span>
                       <div class="start d-flex align-items-center ps-md-4">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                        </div>
                     </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6 ps-lg-0">
                        <input type="text" name="name" placeholder="Complate Name">
                      </div>
                      <div class="col-lg-6 pe-lg-0">
                        <input type="text" name="Email" placeholder="Email Address">
                      </div>
                      <textarea placeholder="Add Review"></textarea>
                        <button class="button">
                          <span>Post Review</span>
                        </button>
                    </div>
                  </form>
            </div>
   </div>
</section>

@endsection