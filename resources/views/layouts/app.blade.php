<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'Foodie') }}</title>
  <link rel="icon" href="{{ asset("assets/img/logo-icon.png") }}">
  <!-- CSS only -->
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
   <link rel="stylesheet" href="{{ asset("assets/css/owl.theme.default.min.css")}}">
   <!-- fancybox -->
   <link rel="stylesheet" href="{{ asset("assets/css/jquery.fancybox.min.css") }}">
   <!-- Font Awesome 6 -->
   <link rel="stylesheet" href="{{ asset("assets/css/fontawesome.min.css") }}">
   <!-- style -->
   <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
   <!-- responsive -->
   <link rel="stylesheet" href="{{ asset("assets/css/responsive.css") }}">
   <!-- color -->
   <link rel="stylesheet" href="{{ asset("assets/css/color.css") }}">
    <!-- jQuery -->
   <script src="{{ asset("assets/js/jquery-3.6.0.min.js") }}"></script>
   <script src="{{ asset("assets/js/preloader.js") }}"></script>
   @vite(['resources/sass/app.scss', 'resources/js/app.js'])
 </head>
<body>
<!-- preloader -->
<div class="preloader"> 
    <div class="container">
      <div class="dot dot-1"></div>
      <div class="dot dot-2"></div>
      <div class="dot dot-3"></div>
    </div>
</div>
<!-- end preloader -->
<header class="one">
  <div class="top-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
               <div class="d-flex align-items-center">
                  <div class="content-header me-5">
                    <i>
                        <svg height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g id="_16-Smartphone" data-name="16-Smartphone"><path d="m23 2h-14a3 3 0 0 0 -3 3v22a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-22a3 3 0 0 0 -3-3zm-5.39 2-.33 1h-2.56l-.33-1zm6.39 23a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1-1v-22a1 1 0 0 1 1-1h3.28l.54 1.63a2 2 0 0 0 1.9 1.37h2.56a2 2 0 0 0 1.9-1.37l.54-1.63h3.28a1 1 0 0 1 1 1z"/><path d="m17 24h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2z"/></g></svg>
                    </i><h4>Phone:<a href="callto:+1(850)344066">+1 (850) 344 0 66</a></h4>
                  </div>
                  <div class="content-header">
                    <i>
                        <svg height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g id="_01-Email" data-name="01-Email"><path d="m29.61 12.21-13-10a1 1 0 0 0 -1.22 0l-13 10a1 1 0 0 0 -.39.79v14a3 3 0 0 0 3 3h22a3 3 0 0 0 3-3v-14a1 1 0 0 0 -.39-.79zm-13.61-7.95 11.36 8.74-11.36 8.74-11.36-8.74zm11 23.74h-22a1 1 0 0 1 -1-1v-12l11.39 8.76a1 1 0 0 0 1.22 0l11.39-8.76v12a1 1 0 0 1 -1 1z"/></g></svg>
                     </i><h4>Email:<a href="mailto:+1(850)344066">info@domain.com</a></h4>
                  </div>
               </div>
            </div>
            <div class="col-xl-6">
               <div class="d-flex align-items-center login">
               <div class="header-social-media">
                  <a href="#">
                     Facebook
                  </a>
                  <a href="#">
                     Instagram
                  </a>
                  <a href="#">
                     Youtube
                  </a>   
               </div>
               <div class="register dropdown">
                <i>
                    <svg clip-rule="evenodd" fill-rule="evenodd" height="512" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g id="Approved-User"><path d="m10.105 22.3c.21-.482.511-.926.89-1.305.797-.797 1.878-1.245 3.005-1.245h4c1.127 0 2.208.448 3.005 1.245.379.379.68.823.89 1.305.166.379.608.553.988.387.379-.165.553-.608.387-.987-.285-.653-.691-1.253-1.204-1.766-1.078-1.078-2.541-1.684-4.066-1.684-1.3 0-2.7 0-4 0-1.525 0-2.988.606-4.066 1.684-.513.513-.919 1.113-1.204 1.766-.166.379.008.822.387.987.38.166.822-.008.988-.387z"/><path d="m16 8.25c-3.174 0-5.75 2.576-5.75 5.75s2.576 5.75 5.75 5.75 5.75-2.576 5.75-5.75-2.576-5.75-5.75-5.75zm0 1.5c2.346 0 4.25 1.904 4.25 4.25s-1.904 4.25-4.25 4.25-4.25-1.904-4.25-4.25 1.904-4.25 4.25-4.25z"/><path d="m26.609 12.25c.415 1.173.641 2.435.641 3.75 0 6.209-5.041 11.25-11.25 11.25s-11.25-5.041-11.25-11.25 5.041-11.25 11.25-11.25c1.315 0 2.577.226 3.75.641.39.138.819-.067.957-.457s-.067-.819-.457-.957c-1.329-.471-2.76-.727-4.25-.727-7.037 0-12.75 5.713-12.75 12.75s5.713 12.75 12.75 12.75 12.75-5.713 12.75-12.75c0-1.49-.256-2.921-.727-4.25-.138-.39-.567-.595-.957-.457s-.595.567-.457.957z"/><path d="m21.47 8.53 2 2c.293.293.767.293 1.06 0l4-4c.293-.292.293-.768 0-1.06-.292-.293-.768-.293-1.06 0l-3.47 3.469s-1.47-1.469-1.47-1.469c-.292-.293-.768-.293-1.06 0-.293.292-.293.768 0 1.06z"/></g></svg>
                 </i>
                  @guest
                  @if (Route::has('login'))
                     <a href="{{ route('login') }}">Login / Register</a>
                  @endif
                  @else
                           
                  <a id="navbarDropdown" class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        LogOut
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                            
                        @endguest
               </div>
               </div>
            </div>
        </div>
    </div>
  </div>
  <div class="bottom-bar ">
    <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-3">
               <div class="d-flex align-items-center justify-content-between">
                  <div class="logo">
                     <a href="{{ route('home') }}">
                        <img alt="logo" src="{{ asset("assets/img/logo.png") }}">
                     </a>
                  </div>
                  <div class="d-flex cart-checkout">
                    <a href="{{ route("viewcart") }}" class="pr-cart">

                      <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge bg-danger">{{ count((array) session('cart')) }}</span>
  
                  </a>

                  
                    <div class="bar-menu">
                         <i class="fa-solid fa-bars"></i>
                    </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6">
               <nav class="navbar">
                  <ul class="navbar-links">
                    <li class="navbar-dropdown">
                      <a href="{{ route('home') }}">home</a>
                      
                    </li>
                    <li class="navbar-dropdown">
                      <a href="{{ route("menu") }}">Menu</a>
                      
                    </li>
                    <li class="navbar-dropdown">
                      <a href="{{ route("shop") }}">Shop</a>
                    </li>
                    <li class="navbar-dropdown">
                      <a href="#">News</a>
                      <div class="dropdown">
                        <a href="our-blog.html">our blog</a>
                        <a href="blog-details.html">blog details</a>
                      </div>
                    </li>
                    <li class="navbar-dropdown">
                      <a href="#">Pages</a>
                      <div class="dropdown">
                        <a href="{{ route('about') }}">about</a>
                        <a href="our-services.html">our services</a>
                        <a href="chef-details.html">chef details</a>
                        
                      </div>
                    </li>
                    <li class="navbar-dropdown">
                      <a href="{{ route('contact') }}">Contact</a>
                    </li>
                  </ul>
                </nav>
            </div>
            <div class="col-lg-3">
               <div class="hamburger-icon">
                  <div class="donation">

                <a href="#" class="pr-cart">

                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge bg-danger">{{ count((array) session('cart')) }}</span>

                </a>

                <div class="cart-popup pr-5">

                    <ul>
                        @php $total = 0 @endphp
                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                      <li class="d-flex align-items-center position-relative">

                        <div class="p-img light-bg">

                          <img src="{{ asset(  $details['poster'] ) }}" alt="Product Image" height="75px">

                        </div>

                        <div class="p-data">

                          <h3 class="font-semi-bold">{{ $details['title'] }}</h3>
                          @php $sum =$details['quantity'] * $details['price']  @endphp
                          <p class="theme-clr font-semi-bold">{{ $details['quantity'] }} x {{ $details['price']}} $ ={{ $sum }}$</p>
                          @php $total +=$sum  @endphp
                        </div>
                        <div rowdel="{{ $id }}" class="actions">
                          <a class="btn btn-outline-danger delete-product position-absolute bottom-50 end-0"><i class="fa-solid fa-trash"></i></a>
                        </div>
                        

                      </li>
                      @endforeach
                      @endif
                    

                    </ul>

                      <div class="cart-total d-flex align-items-center justify-content-between">
                        @if(session('total'))
                        <span class="font-semi-bold">Total:</span>
                        
                        <span class="font-semi-bold">{{ session()->get('total'); }}$</span>
                        @endif
                      </div>

                      <div class="cart-btns d-flex align-items-center justify-content-between">

                        <a class="font-bold" href="{{ route("viewcart") }}">View Cart</a>

                        <a class="font-bold theme-bg-clr text-white checkout" href="{{ route("checkout", $total) }}">Checkout</a>

                      </div>

                </div>

              </div>
                     <a href="{{ route('contact') }}" class="button">Reserve a Table</a>
               </div>
            </div>
         </div>
   </div>  
  </div>
  <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">
      <div class="res-log">
        <a href="{{ route('home') }}">
          <img src="{{ asset("assets/img/logo.png") }}" alt="Responsive Logo" class="white-logo">
        </a>
      </div>
        <ul>

          <li class="menu-item-has-children"><a href="{{ route('home') }}">Home</a>
              
           
          </li>
          <li class="menu-item-has-children"><a href="{{ route('menu') }}">menu</a>
            
          </li>

          
          <li class="menu-item-has-children"><a href="JavaScript:void(0)">shop</a>

          <ul class="sub-menu">
            <li><a href="shop.html">our product</a></li>
            <li><a href="product-details.html">product details</a></li>
            <li><a href="shop-cart.html">shop cart</a></li>
            <li><a href="cart-checkout.html">cart checkout</a></li>
          </ul>

          </li>
          <li class="menu-item-has-children"><a href="JavaScript:void(0)">News</a>

          <ul class="sub-menu">

           <li><a href="our-blog.html">our blog</a></li>
                    <li><a href="blog-details.html">blog details</a></li>
          </ul>

          </li>
          <li class="menu-item-has-children"><a href="JavaScript:void(0)">Pages</a>

          <ul class="sub-menu">

            <li><a href="{{ route('about') }}">about</a></li>
            <li><a href="our-services.html">our services</a></li>
            <li><a href="chef-details.html">chef details</a></li>
            
          </ul>

          </li>

          <li><a href="{{ route('contact') }}">contacts</a></li>

          </ul>

          <a href="JavaScript:void(0)" id="res-cross"></a>
  </div>
</header>
{{-- finishing of header --}}
@yield('content')


<footer style="background-image: url(https://via.placeholder.com/1920x660);background-color: #f5f8fd;">
   <div class="container">
      <div class="row">
         <div class="col-xl-4 col-lg-6">
            <div class="logo-white">
               <a href="{{ route('home') }}"><img alt="logo-white" src="{{ asset("assets/img/logo-white.png") }}"></a>
               <p>Tuesday - Saturday:   12:00pm - 23:00pm 
               <span>Closed on Sunday</span></p>
               <img alt="tripa" src="{{ asset("assets/img/tripa.png") }}">
               <h6>5 star rated on TripAdvisor</h6>
            </div>
         </div>
         <div class="col-xl-2 col-lg-3 col-md-6">
            <div class="link-about">
               <h3>About</h3>
               <ul>
                  <li><i class="fa-solid fa-angle-right"></i><a href="{{ route('about') }}">Information</a></li>
                  <li><i class="fa-solid fa-angle-right"></i><a href="#">Special Dish</a></li>
                  <li><i class="fa-solid fa-angle-right"></i><a href="#">Reservation</a></li>
                  <li><i class="fa-solid fa-angle-right"></i><a href="{{ route('contact') }}">Contact</a></li>
               </ul>
            </div>
         </div>
         <div class="col-xl-2 col-lg-3 col-md-6">
            <div class="link-about">
               <h3>menu</h3>
               <ul>
                  <li><i class="fa-solid fa-angle-right"></i><a href="menu-1.html">Steaks</a></li>
                  <li><i class="fa-solid fa-angle-right"></i><a href="menu-1.html">Burgers</a></li>
                  <li><i class="fa-solid fa-angle-right"></i><a href="menu-1.html">Coctails</a></li>
                  <li><i class="fa-solid fa-angle-right"></i><a href="menu-1.html">Bar B Q</a></li>
                  <li><i class="fa-solid fa-angle-right"></i><a href="menu-1.html">Desserts</a></li>
               </ul>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6">
            <div class="link-about">
               <h3>Newsletter</h3>
               <p>Get recent news and updates.</p>
               <form class="footer-form">
                  <input type="text" name="Enter Your Email Address" placeholder="Enter Your Email Address...">
                  <button class="button">Subscribe</button>
               </form>
            </div>
         </div>
      </div>
      <div class="footer-bootem">
         <h6><span>© 2023 Foodio</span> | Restaurant and BBQ.</h6>
         <div class="header-social-media">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
            <a href="#">Youtube</a>   
         </div>
      </div>
   </div>
</footer>
<!-- progress -->
<div id="progress">
      <span id="progress-value"><i class="fa-solid fa-arrow-up"></i></span>
</div>

<!-- Bootstrap Js -->
<script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("assets/js/owl.carousel.min.js") }}"></script>
<!-- fancybox -->
<script src="{{ asset("assets/js/jquery.fancybox.min.js") }}"></script>
<script src="{{ asset("assets/js/custom.js") }}"></script>

<!-- Form Script -->
<script src="{{ asset("assets/js/contact.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/sweetalert.min.js") }}"></script>

<script type="text/javascript">
   
  $(".delete-product").click(function (e) {
      e.preventDefault();
 
      var ele = $(this);
 
      if(confirm("Do you really want to delete?")) {
          $.ajax({
              url: '{{ route('delete.cart.product') }}',
              method: "DELETE",
              data: {
                  _token: '{{ csrf_token() }}', 
                  id: ele.parents("div").attr("rowdel")
              },
              success: function (response) {
                  window.location.reload();
              }
          });
      }
  });
 
</script>
@yield('scripts')
</body>
