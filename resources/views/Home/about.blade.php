@extends('layouts.app')
@section('content')
<section class="banner" style="background-color: #FFDEAD;">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-7">
               <div class="title-area-data">
                  <h2>About Us</h2>
                  <p>A magical combination that sent aromas to the taste buds</p>
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
                        <img alt="title-area-img" src="{{url('/static-image/menu1.jpg')}}">
                        <img alt="pata" class="pata" src="assets/img/pata.png">
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="title-area-img two">
                        <img alt="title-area-img" src="{{url('/static-image/shop1.jpg')}}">
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
            <div class="col-xl-6">
               <div class="heading">
                  <span>About The Food Restaurant</span>
                  <h2>New Ground with Dishes to be Enjoyed</h2>
               </div>
            </div>
            <div class="col-xl-6">
               <div class="about-text">
                  <p>Nisl quam nestibulum ac quam nec odio eleme aucan ligula. Orci varius nat oque pena tibus et urient monte nascete ridiculus mus nellentesq um ac qu am nec odio rbine. Nisl quam nestibu aucan ligula. </p>
                  <div class="mt-4 d-flex align-items-center">
                     <img alt="girl" src="{{url('/static-image/ceo.jpg')}}">
                     <div>
                        <h4>Willimes James</h4>
                        <p>Director and Chief Operations Officer</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row mt-5">
            <div class="col-xl-4 col-lg-6">
               <div class="restaurant-card">
                  <img alt="Restaurant-img" class="w-100" src="{{url('/static-image/reserve_table.jpg')}}">
                  <div class="restaurant-span">
                     <span>Restaurant</span>
                  </div>
                  <div class="coctail-bar">
                     <h5>Restaurant</h5>
                     <p>Nisl quam nestibulum ac quam nec aucan ligula. Orci varius natoque li um ac quam nec odio rbine.</p>
                     <a href="contact.html">Reserve a Table</a>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6">
               <div class="restaurant-card coctail">
                  <img alt="Restaurant-img" class="w-100" src="{{url('/static-image/juice.jpg')}}">
                  <div class="restaurant-span">
                     <span>Juice Bar</span>
                  </div>
                  <div class="coctail-bar">
                     <h5>Juice Bar</h5>
                     <p>Nisl quam nestibulum ac quam nec aucan ligula. Orci varius natoque li um ac quam nec odio rbine.</p>
                     <a href="contact.html">Reserve a Table</a>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-6">
               <div class="restaurant-card">
                  <img alt="Restaurant-img" class="w-100" src="{{url('/static-image/private_dining.jpg')}}">
                  <div class="restaurant-span">
                     <span>Private Dining</span>
                  </div>
                  <div class="coctail-bar">
                     <h5>Private Dining</h5>
                     <p>Nisl quam nestibulum ac quam nec aucan ligula. Orci varius natoque li um ac quam nec odio rbine.</p>
                     <a href="contact.html">Reserve a Table</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
{{--   <div class="gap no-top">--}}
{{--      <div class="container">--}}
{{--         <div class="trusted-sponsor">--}}
{{--            <h3>Highly Trusted Sponsor</h3>--}}
{{--            <div class="logodata owl-carousel owl-theme">--}}
{{--             <div class="partner item">--}}
{{--               <img alt="sponsor-img" src="https://via.placeholder.com/161x126">--}}
{{--             </div>--}}
{{--             <div class="partner item">--}}
{{--               <img alt="sponsor-img" src="https://via.placeholder.com/161x126">--}}
{{--             </div>--}}
{{--             <div class="partner item">--}}
{{--               <img alt="sponsor-img" src="https://via.placeholder.com/161x126">--}}
{{--             </div>--}}
{{--             <div class="partner item">--}}
{{--               <img alt="sponsor-img" src="https://via.placeholder.com/161x126">--}}
{{--             </div>--}}
{{--             <div class="partner item">--}}
{{--               <img alt="sponsor-img" src="https://via.placeholder.com/161x126">--}}
{{--             </div>--}}
{{--             <div class="partner item">--}}
{{--               <img alt="sponsor-img" src="https://via.placeholder.com/161x126">--}}
{{--             </div>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--      </div>--}}
{{--   </div>--}}
   <section class="how-we-work">
      <div class="container">
         <div class="row">
            <div class="col-xl-7">
               <div class="heading">
                  <h6>EASY ORDER IN 3 STEPS</h6>
                  <h2>How We Work</h2>
               </div>
               <div class="easy-orded-style">
                  <div class="easy-orded">
                     <sup>1</sup>
                     <i>
                        <svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m408.5 95.005h-25v-60.014c0-11.197-5.417-21.799-14.49-28.36s-20.839-8.386-31.473-4.878l-245.001 80.806c-14.377 4.743-24.036 18.101-24.036 33.239v279.536 81.666c0 19.299 15.701 35 35 35h305c19.299 0 35-15.701 35-35v-346.995c0-19.298-15.701-35-35-35zm5 381.995c0 2.757-2.243 5-5 5h-305c-2.757 0-5-2.243-5-5v-96.665-250.33c0-2.757 2.243-5 5-5h305c2.757 0 5 2.243 5 5zm-66.566-446.757c2.112-.696 3.723.138 4.497.697.773.559 2.07 1.828 2.07 4.051v60.015h-202.923z"></path><path d="m156 298.481h18.182 181.818c8.284 0 15-6.716 15-15s-6.716-15-15-15h-4.345c-6.466-41.398-39.257-74.189-80.655-80.655v-7.516c0-8.284-6.716-15-15-15s-15 6.716-15 15v7.516c-41.398 6.466-74.189 39.257-80.655 80.655h-4.345c-8.284 0-15 6.716-15 15s6.716 15 15 15zm100-81.818c31.688 0 58.294 22.174 65.121 51.818h-130.242c6.827-29.644 33.434-51.818 65.121-51.818z"></path><path d="m161.817 339.005c-8.284 0-15 6.716-15 15s6.716 15 15 15h72c8.284 0 15-6.716 15-15s-6.716-15-15-15z"></path><path d="m352.25 399.005h-192.5c-8.284 0-15 6.716-15 15s6.716 15 15 15h192.5c8.284 0 15-6.716 15-15s-6.716-15-15-15z"></path></svg>
                     </i>
                     <h4>Explore Menu</h4>
                     <p>A range of powerful tools for viewing, querying and filtering your data.</p>
                  </div>
                  <div class="easy-orded">
                     <sup>2</sup>
                     <i>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512">
                        <g>
                           <polygon style="fill:none;stroke:#000000;stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
         421,497 91,497 71,437 441,437    "></polygon>

                              <line style="fill:none;stroke:#000000;stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="15" y1="437" x2="497" y2="437"></line>
                           <path style="fill:none;stroke:#000000;stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" d="
         M465.4,436c-3.43-112.69-95.87-203-209.4-203S50.03,323.31,46.6,436"></path>

                              <line style="fill:none;stroke:#000000;stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="256" y1="197" x2="256" y2="230"></line>
                           <path style="fill:none;stroke:#000000;stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" d="
         M172.952,141c0,0,17.026-22.503,0-46.1s3.784-44.239,3.784-44.239"></path>
                           <path style="fill:none;stroke:#000000;stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" d="
         M254.971,105.34c0,0,17.026-22.503,0-46.1S258.754,15,258.754,15"></path>
                           <path style="fill:none;stroke:#000000;stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" d="
         M338.178,141c0,0,17.026-22.503,0-46.1c-17.026-23.597,3.784-44.239,3.784-44.239"></path>
                        </g>
                        </svg>
                     </i>
                     <h4>Choose a Dish</h4>
                     <p>A range of powerful tools for viewing, querying and filtering your data.</p>
                  </div>
                  <div class="easy-orded">
                     <sup>3</sup>
                     <i>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="512" height="512"><g id="Tracking"><path d="M61.707,34.293,49.293,21.879A2.978,2.978,0,0,0,47.171,21H30v2h5V38h2V23H47.171a1,1,0,0,1,.708.293L49.586,25H45a2,2,0,0,0-2,2v9a2,2,0,0,0,2,2H60v8a1,1,0,0,1-1,1H56.92a6.991,6.991,0,0,0-13.84,0H28.92a6.991,6.991,0,0,0-13.84,0H13a1,1,0,0,1-1-1V37H10v9a3,3,0,0,0,3,3h2.08a6.978,6.978,0,0,0,2.031,4H2v2H50a7.006,7.006,0,0,0,6.92-6H59a3,3,0,0,0,3-3V35A1,1,0,0,0,61.707,34.293ZM17,48a5,5,0,1,1,5,5A5.006,5.006,0,0,1,17,48Zm9.889,5a6.978,6.978,0,0,0,2.031-4H43.08a6.978,6.978,0,0,0,2.031,4ZM50,53a5,5,0,1,1,5-5A5.006,5.006,0,0,1,50,53ZM45,36V27h6.586L60,35.414V36Z"></path><rect x="21" y="47" width="2" height="2"></rect><rect x="49" y="47" width="2" height="2"></rect><rect x="2" y="44" width="5" height="2"></rect><rect x="4" y="40" width="3" height="2"></rect><rect x="5" y="36" width="2" height="2"></rect><path d="M15,35A13,13,0,1,0,2,22,13.015,13.015,0,0,0,15,35Zm0-24A11,11,0,1,1,4,22,11.013,11.013,0,0,1,15,11Z"></path><path d="M15,31a1,1,0,0,0,.707-.293C16.351,30.063,22,24.29,22,20A7,7,0,0,0,8,20c0,4.29,5.649,10.063,6.293,10.707A1,1,0,0,0,15,31Zm0-16a5.006,5.006,0,0,1,5,5c0,2.566-3.147,6.531-5,8.551-1.853-2.02-5-5.985-5-8.551A5.006,5.006,0,0,1,15,15Z"></path><path d="M18,20a3,3,0,1,0-3,3A3,3,0,0,0,18,20Zm-4,0a1,1,0,1,1,1,1A1,1,0,0,1,14,20Z"></path><rect x="40" y="40" width="4" height="2"></rect></g></svg>
                     </i>
                     <h4>Place Order</h4>
                     <p>A range of powerful tools for viewing, querying and filtering your data.</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-5">
               <div class="easy-orded-video">
                  <img alt="arrow" class="arrow" src="assets/img/arrow-2.png">
                  <span>Watch and Follow</span>
                  <img alt="easy-orded" src="{{url('/static-image/order_online.jpg')}}">
                  <a data-fancybox="" href="https://www.youtube.com/watch?v=1La4QzGeaaQ"><i>
                  <svg width="15" height="22" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 8.5L0.5 0.272758L0.5 16.7272L11 8.5Z" fill="#000"></path>
                  </svg></i></a>
               </div>
            </div>
         </div>
      </div>
   </section>
{{--   <section class="gap" style="background-color:#f5f8fd;">--}}
{{--      <div class="container">--}}
{{--         <div class="heading-two">--}}
{{--            <h2>Restourant History</h2>--}}
{{--            <div class="line"></div>--}}
{{--         </div>--}}
{{--         <div class="row">--}}
{{--            <div class="col-xl-6">--}}
{{--               <div class="history-text">--}}
{{--                  <img alt="history-img" src="https://via.placeholder.com/300x184">--}}
{{--                  <span>1994</span>--}}
{{--                  <div>--}}
{{--                     <a href="#"><h3>Begins Shop</h3></a>--}}
{{--                     <p>Nisl quam nestibulum ac quam nec monte nascete ridiculus mus nell umnec odio rbine.</p>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-6">--}}
{{--               <div class="history-text">--}}
{{--                  <img alt="history-img" src="https://via.placeholder.com/300x184">--}}
{{--                  <span>2010</span>--}}
{{--                  <div>--}}
{{--                     <a href="#"><h3>Restaurant</h3></a>--}}
{{--                     <p>Nisl quam nestibulum ac quam nec monte nascete ridiculus mus nell umnec odio rbine.</p>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-6">--}}
{{--               <div class="history-text">--}}
{{--                  <img alt="history-img" src="https://via.placeholder.com/300x184">--}}
{{--                  <span>2016</span>--}}
{{--                  <div>--}}
{{--                     <a href="#"><h3>Online Shop</h3></a>--}}
{{--                     <p>Nisl quam nestibulum ac quam nec monte nascete ridiculus mus nell umnec odio rbine.</p>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-6">--}}
{{--               <div class="history-text">--}}
{{--                  <img alt="history-img" src="https://via.placeholder.com/300x184">--}}
{{--                  <span>2022</span>--}}
{{--                  <div>--}}
{{--                     <a href="#"><h3>BBQ Restaurant</h3></a>--}}
{{--                     <p>Nisl quam nestibulum ac quam nec monte nascete ridiculus mus nell umnec odio rbine.</p>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--      </div>--}}
{{--      <div class="container ">--}}
{{--         <div class="best-solutions">--}}
{{--            <div class="heading">--}}
{{--               <span>Best Solutions</span>--}}
{{--               <h2>We Provide Best Services</h2>--}}
{{--            </div>--}}
{{--            <p>Nisl quam nestibulum ac quam nec odio elementu aucan ligula. Orci varius natoque pena tibus et maurient monte nascete ridiculus mus nellentesque um ac quam nec odio rbine.</p>--}}
{{--         </div>--}}
{{--         <div class="row">--}}
{{--            <div class="col-xl-3 col-lg-4 col-md-6">--}}
{{--               <div class="best-solutions-service">--}}
{{--                  <i>--}}
{{--                     <svg version="1.1" xml:space="preserve" width="682.66669" height="682.66669" viewBox="0 0 682.66669 682.66669" xmlns="http://www.w3.org/2000/svg"><defs id="defs13"><clipPath clipPathUnits="userSpaceOnUse" id="clipPath23"><path d="M 0,512 H 512 V 0 H 0 Z" id="path21"></path></clipPath></defs><g id="g15" transform="matrix(1.3333333,0,0,-1.3333333,0,682.66667)"><g id="g17"><g id="g19" clip-path="url(#clipPath23)"><g id="g25" transform="translate(100.1936,39.1833)"><path d="m 0,0 c 29.512,-18.492 64.411,-29.183 101.806,-29.183 106.039,0 192,85.961 192,192 v 104 h -384 v -104 c 0,-36.258 10.05,-70.167 27.516,-99.096" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path27"></path></g><g id="g29" transform="translate(361.9829,94.9141)"><path d="m 0,0 h 29.403 c 38.897,0 70.543,31.646 70.543,70.543 0,38.022 -30.238,69.115 -67.929,70.495 m 0,40.017 C 91.768,179.662 139.946,130.623 139.946,70.543 139.946,9.589 90.356,-40 29.403,-40 h -65.154" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path31"></path></g><g id="g33" transform="translate(324.3333,120.125)"><path d="m 0,0 h -99.202 v 89.764 l 32.117,32.118 h 34.968 C -19.575,109.339 -12.543,102.307 0,89.764 Z" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path35"></path></g><g id="g37" transform="translate(274.7323,224.3333)"><path d="M 0,0 V 97.667" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path39"></path></g><g id="g41" transform="translate(77.7634,465.6565)"><path d="M 0,0 H 34.305 C 67.636,0 94.656,-27.02 94.656,-60.351 V -94.656 H 60.351 C 27.02,-94.656 0,-67.636 0,-34.305 Z" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path43"></path></g><g id="g45" transform="translate(169.5515,373.8684)"><path d="M 0,0 -36.879,36.879" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path47"></path></g><g id="g49" transform="translate(326.2366,502)"><path d="m 0,0 v -34.305 c 0,-33.331 -27.02,-60.351 -60.351,-60.351 h -34.305 v 34.305 C -94.656,-27.02 -67.636,0 -34.305,0 Z" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path51"></path></g><g id="g53" transform="translate(234.4485,410.2119)"><path d="M 0,0 36.879,36.879" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path55"></path></g><g id="g57" transform="translate(225.1303,199.5808)"><path d="m 0,0 c -8.203,5.228 -15.967,11.423 -23.13,18.586 h -0.001 c -53.019,53.019 -138.98,53.019 -191.999,0" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path59"></path></g><g id="g61" transform="translate(394,218.1668)"><path d="M 0,0 V 0 C -19.773,-19.773 -44.128,-32.172 -69.648,-37.197" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path63"></path></g><g id="g65" transform="translate(65.1146,67.3646)"><path d="M 0,0 V 0" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path67"></path></g></g></g></g></svg>--}}
{{--                  </i>--}}
{{--                  <a href="#"><h3>Afternoon Tea</h3></a>--}}
{{--                  <p>Nisl quam nestibulum ac quam nec aucan ligula Orci varius.</p>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-3 col-lg-4 col-md-6">--}}
{{--               <div class="best-solutions-service">--}}
{{--                  <i>--}}
{{--                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="512" height="512"><g><path d="M61.707,34.293,49.293,21.879A2.978,2.978,0,0,0,47.171,21H30v2h5V38h2V23H47.171a1,1,0,0,1,.708.293L49.586,25H45a2,2,0,0,0-2,2v9a2,2,0,0,0,2,2H60v8a1,1,0,0,1-1,1H56.92a6.991,6.991,0,0,0-13.84,0H28.92a6.991,6.991,0,0,0-13.84,0H13a1,1,0,0,1-1-1V37H10v9a3,3,0,0,0,3,3h2.08a6.978,6.978,0,0,0,2.031,4H2v2H50a7.006,7.006,0,0,0,6.92-6H59a3,3,0,0,0,3-3V35A1,1,0,0,0,61.707,34.293ZM17,48a5,5,0,1,1,5,5A5.006,5.006,0,0,1,17,48Zm9.889,5a6.978,6.978,0,0,0,2.031-4H43.08a6.978,6.978,0,0,0,2.031,4ZM50,53a5,5,0,1,1,5-5A5.006,5.006,0,0,1,50,53ZM45,36V27h6.586L60,35.414V36Z"></path><rect x="21" y="47" width="2" height="2"></rect><rect x="49" y="47" width="2" height="2"></rect><rect x="2" y="44" width="5" height="2"></rect><rect x="4" y="40" width="3" height="2"></rect><rect x="5" y="36" width="2" height="2"></rect><path d="M15,35A13,13,0,1,0,2,22,13.015,13.015,0,0,0,15,35Zm0-24A11,11,0,1,1,4,22,11.013,11.013,0,0,1,15,11Z"></path><path d="M15,31a1,1,0,0,0,.707-.293C16.351,30.063,22,24.29,22,20A7,7,0,0,0,8,20c0,4.29,5.649,10.063,6.293,10.707A1,1,0,0,0,15,31Zm0-16a5.006,5.006,0,0,1,5,5c0,2.566-3.147,6.531-5,8.551-1.853-2.02-5-5.985-5-8.551A5.006,5.006,0,0,1,15,15Z"></path><path d="M18,20a3,3,0,1,0-3,3A3,3,0,0,0,18,20Zm-4,0a1,1,0,1,1,1,1A1,1,0,0,1,14,20Z"></path><rect x="40" y="40" width="4" height="2"></rect></g></svg>--}}
{{--                  </i>--}}
{{--                  <a href="#"><h3>Takeaway &amp; Delivery</h3></a>--}}
{{--                  <p>Nisl quam nestibulum ac quam nec aucan ligula Orci varius.</p>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-3 col-lg-4 col-md-6">--}}
{{--               <div class="best-solutions-service">--}}
{{--                  <i>--}}
{{--                     <svg version="1.1" id="svg2196" xml:space="preserve" width="682.66669" height="682.66669" viewBox="0 0 682.66669 682.66669" xmlns="http://www.w3.org/2000/svg"><defs id="defs2200"><clipPath clipPathUnits="userSpaceOnUse" id="clipPath2210"><path d="M 0,512 H 512 V 0 H 0 Z" id="path2208"></path></clipPath></defs><g id="g2202" transform="matrix(1.3333333,0,0,-1.3333333,0,682.66667)"><g id="g2204"><g id="g2206" clip-path="url(#clipPath2210)"><g id="g2212" transform="translate(311.9868,50)"><path d="M 0,0 -88.324,-40 H 88.324 Z" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path2214"></path></g><g id="g2216" transform="translate(318,390.0273)"><path d="M 0,0 H 170.635 L -6.013,-190.863 -182.661,0 H -84" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path2218"></path></g><g id="g2220" transform="translate(286,390.0273)"><path d="m 0,0 c 0,-5.523 -4.477,-10 -10,-10 -5.523,0 -10,4.477 -10,10 0,5.522 4.477,10 10,10 C -4.477,10 0,5.522 0,0" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path2222"></path></g><g id="g2224" transform="translate(311.9868,199.1641)"><path d="M 0,0 V -149.164" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path2226"></path></g><g id="g2228" transform="translate(191.729,486.9385)"><path d="m 0,0 c -37.596,-64.605 -75.192,-129.211 -112.789,-193.816 -53.162,30.936 -71.451,100.14 -40.514,153.302 C -122.366,12.648 -53.162,30.937 0,0 Z" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path2230"></path></g><g id="g2232" transform="translate(135.3389,390.0273)"><path d="M 0,0 -108.196,-28.594" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path2234"></path></g><g id="g2236" transform="translate(106.7456,498.2227)"><path d="M 0,0 28.593,-108.195" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path2238"></path></g><g id="g2240" transform="translate(135.3389,390.0273)"><path d="M 0,0 -96.911,56.396" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path2242"></path></g><g id="g2244" transform="translate(311.9868,267.1338)"><path d="M 0,0 176.648,190.863" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path2246"></path></g><g id="g2248" transform="translate(437.6074,334.8926)"><path d="M 0,0 H -251.248" style="fill:none;stroke:#000000;stroke-width:20;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path2250"></path></g></g></g></g></svg>--}}
{{--                  </i>--}}
{{--                  <a href="#"><h3>Wine &amp; Cocktails</h3></a>--}}
{{--                  <p>Nisl quam nestibulum ac quam nec aucan ligula Orci varius.</p>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-3 col-lg-4 col-md-6">--}}
{{--               <div class="best-solutions-service">--}}
{{--                  <i>--}}
{{--                     <svg enable-background="new 0 0 64 64" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m5.362 38.843 1.969.355c.113-.628.255-1.256.421-1.865l-1.93-.525c-.181.665-.336 1.349-.46 2.035z"></path><path d="m5 42.952.443.021 1.556-.094c0-.588.026-1.19.079-1.791l-1.992-.174c-.058.659-.087 1.32-.086 2.038z"></path><path d="m6.452 34.823 1.879.684c.219-.601.465-1.196.73-1.771l-1.816-.839c-.288.625-.556 1.273-.793 1.926z"></path><path d="m40.485 22.045-.971 1.748c.569.316 1.134.664 1.68 1.035l1.123-1.655c-.594-.404-1.211-.783-1.832-1.128z"></path><path d="m21.699 20.141.602 1.907c2.111-.665 4.32-1.002 6.563-1.002 3.039 0 5.979.607 8.737 1.804l.797-1.835c-3.013-1.307-6.22-1.969-9.534-1.969-2.447 0-4.858.369-7.165 1.095z"></path><path d="m10.98 53.364h2v2h-2z" transform="matrix(.707 -.707 .707 .707 -34.933 24.394)"></path><path d="m16.637 47.707h2v2h-2z" transform="matrix(.707 -.707 .707 .707 -29.275 26.737)"></path><path d="m13.809 50.535h2v2h-2z" transform="matrix(.707 -.707 .707 .707 -32.103 25.566)"></path><path d="m52 44.763v-1.763h-1c-1.657 0-2.95.281-3.973.631.554-.76.973-1.614.973-2.631 0-1.707-1.17-2.961-2.202-4.067-.507-.543-.985-1.056-1.265-1.551-.298-.528-.505-1.234-.723-1.981-.277-.946-.565-1.911-1.085-2.712l4.936-4.936c.213 1.764.339 3.809.339 6.247h2c0-11.895-2.891-15.613-5.213-18.602-1.558-2.002-2.787-3.585-2.787-7.398 0-1.654 1.346-3 3-3s3 1.346 3 3-1.346 3-3 3h-1v2h1c2.757 0 5-2.243 5-5s-2.243-5-5-5-5 2.243-5 5c0 4.499 1.558 6.504 3.208 8.626 1.315 1.693 2.73 3.531 3.68 7.004-5.032-4.238-11.31-6.562-17.931-6.584-5.815.016-11.364 1.764-16.034 5.039-.443-2.875-2.926-5.085-5.923-5.085-3.309 0-6 2.691-6 6 0 2.995 2.208 5.477 5.079 5.922-3.286 4.669-5.053 10.216-5.034 16.035.026 7.443 2.955 14.457 8.248 19.75l.707.707 1.968-1.968c5.205 1.015 12.105 1.554 20.032 1.554 15.405 0 31-2.748 31-8v-3.866h-.012c.002-.045.012-.089.012-.134 0-3.253-5.799-5.17-11-6.237zm9 6.237c0 2.506-11.032 6-29 6-5.194 0-10.225-.311-14.683-.903l3.097-3.097h.586c.625 0 .683.031 1.396.412 1.115.594 2.979 1.588 6.103 1.588 3.127 0 4.99-.994 6.105-1.59.711-.379.769-.41 1.392-.41.626 0 .684.031 1.398.411 1.113.595 2.976 1.589 6.104 1.589s4.991-.994 6.104-1.589c.714-.38.772-.411 1.398-.411h1v-6.192c7.075 1.504 9 3.376 9 4.192zm-37.212-1.373c.164.082.326.167.492.256.982.523 2.095 1.117 4.219 1.117 2.125 0 3.237-.594 4.22-1.118.887-.473 1.653-.882 3.277-.882 1.626 0 2.393.409 3.28.883.983.523 2.097 1.117 4.222 1.117s3.239-.594 4.222-1.117c.682-.364 1.297-.688 2.28-.819v2.022c-.449.096-.805.275-1.34.562-1.069.57-2.534 1.352-5.162 1.352s-4.093-.782-5.164-1.354c-.862-.459-1.256-.646-2.338-.646-1.08 0-1.472.187-2.336.647-1.069.571-2.534 1.353-5.161 1.353-2.624 0-4.091-.782-5.162-1.354-.427-.228-.739-.388-1.077-.492zm26.212-2.573c-1.494.153-2.408.629-3.222 1.063-.887.474-1.654.883-3.28.883s-2.393-.409-3.28-.883c-.983-.523-2.097-1.117-4.222-1.117-2.124 0-3.237.594-4.219 1.117-.887.474-1.653.883-3.278.883-1.594 0-2.362-.395-3.229-.856l1.488-1.488c.517.24.94.344 1.741.344 1.081 0 1.474-.187 2.337-.647 1.069-.571 2.534-1.353 5.16-1.353 2.628 0 4.093.782 5.164 1.354.862.459 1.256.646 2.338.646s1.476-.187 2.34-.647c.926-.494 2.147-1.146 4.162-1.312zm-13.011-10.629c1.818.785 3.011 2.551 3.011 4.575 0 .87-.227 1.701-.647 2.444-.917-.256-2.014-.444-3.357-.444-3.126 0-4.989.994-6.103 1.589-.712.38-.77.411-1.394.411-.031 0-.056-.001-.084-.001zm4.902-2.464c.24.823.489 1.674.9 2.403.396.703.98 1.328 1.545 1.934.855.917 1.664 1.783 1.664 2.702s-.809 1.785-1.664 2.702c-.385.412-.759.844-1.096 1.293-.399-.015-.539-.088-1.14-.407-.245-.131-.533-.282-.857-.437.492-.97.757-2.038.757-3.151 0-2.567-1.376-4.835-3.527-6.059l2.778-2.778c.255.524.453 1.16.64 1.798zm-34.891-8.961c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4c0 .192-.025.398-.062.613-.596.504-1.178 1.029-1.737 1.588s-1.085 1.141-1.59 1.738c-.215.036-.42.061-.611.061zm3.615-.385c4.884-4.884 11.359-7.569 18.247-7.569h.089c6.578.022 12.797 2.489 17.621 6.967l-36.558 36.559c-9.44-10.181-9.249-26.106.601-35.957zm21.385 36.385c-7.134 0-13.409-.438-18.316-1.27l1.868-1.868c4.907.743 10.576 1.138 16.448 1.138 12.102 0 24.316-1.697 29-4.97v.97c0 2.506-11.032 6-29 6z"></path><path d="m57.225 24.895c-2.918 2.363-6.225 5.042-6.225 16.105h2c0-10.11 2.788-12.368 5.483-14.551 2.221-1.799 4.517-3.658 4.517-9.449 0-2.757-2.243-5-5-5s-5 2.243-5 5 2.243 5 5 5h1v-2h-1c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3c0 4.837-1.666 6.186-3.775 7.895z"></path></svg>--}}
{{--                  </i>--}}
{{--                  <a href="#"><h3>Alfresco Dining</h3></a>--}}
{{--                  <p>Nisl quam nestibulum ac quam nec aucan ligula Orci varius.</p>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--      </div>--}}
{{--   </section>--}}

{{--   <section class="gap no-bottom">--}}
{{--      <div class="container">--}}
{{--         <div class="heading-two">--}}
{{--            <h2>Meet Our Experts</h2>--}}
{{--            <div class="line"></div>--}}
{{--         </div>--}}
{{--         <div class="row">--}}
{{--            <div class="col-xl-4 col-lg-6">--}}
{{--               <div class="chef">--}}
{{--                  <img alt="cook chef" src="https://via.placeholder.com/392x505">--}}
{{--                  <div class="chef-text">--}}
{{--                     <div>--}}
{{--                        <span>Dessert specialist</span>--}}
{{--                        <a href="chef-details.html"><h3>Thomas Walim</h3></a>--}}
{{--                        <ul class="social-media">--}}
{{--                           <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>--}}
{{--                           <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>--}}
{{--                           <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <img alt="sine" src="assets/img/sine.png">--}}
{{--                     </div>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-4 col-lg-6">--}}
{{--               <div class="chef">--}}
{{--                  <img alt="cook chef" src="https://via.placeholder.com/392x505">--}}
{{--                  <div class="chef-text">--}}
{{--                     <div>--}}
{{--                        <span>Chef Master</span>--}}
{{--                        <a href="chef-details.html"><h3>James Jhonson</h3></a>--}}
{{--                        <ul class="social-media">--}}
{{--                           <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>--}}
{{--                           <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>--}}
{{--                           <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <img alt="sine" src="assets/img/sine.png">--}}
{{--                     </div>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-4 col-lg-6">--}}
{{--               <div class="chef mb-0">--}}
{{--                  <img alt="cook chef" src="https://via.placeholder.com/392x505">--}}
{{--                  <div class="chef-text">--}}
{{--                     <div>--}}
{{--                        <span>Dessert specialist</span>--}}
{{--                        <a href="chef-details.html"><h3>Room Minal</h3></a>--}}
{{--                        <ul class="social-media">--}}
{{--                           <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>--}}
{{--                           <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>--}}
{{--                           <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <img alt="sine" src="assets/img/sine.png">--}}
{{--                     </div>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--            </div>--}}
{{--         </div>--}}
{{--      </div>--}}
{{--   </section>--}}
   <section class="gap">
      <div class="container">
         <div class="row">
            <div class="col-xl-6">
               <div class="heading">
                  <span>Testimonials & Reviews</span>
                  <h2>Our Customar Feedbacks</h2>
               </div>
               <div class="bratlee-slider owl-carousel owl-theme">
                  <div class="bratlee-hamint item">
                     <p>A good restaurant is like a vacation; it transports you, and it becomes a lot more than just about the food. All great deeds and all great thoughts</p>
                     <div class="d-flex align-items-center mt-4">
                        <h3>Bratlee Hamint</h3>
                        <ul class="star">
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                           </ul>
                     </div>
                     <img alt="quote" class="quote" src="assets/img/quote.png">
                  </div>
                  <div class="bratlee-hamint item">
                     <p>A good restaurant is like a vacation; it transports you, and it becomes a lot more than just about the food. All great deeds and all great thoughts</p>
                     <div class="d-flex align-items-center mt-4">
                        <h3>Bratlee Hamint</h3>
                        <ul class="star">
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                           </ul>
                     </div>
                     <img alt="quote" class="quote" src="assets/img/quote.png">
                  </div>
                  <div class="bratlee-hamint item">
                     <p>A good restaurant is like a vacation; it transports you, and it becomes a lot more than just about the food. All great deeds and all great thoughts</p>
                     <div class="d-flex align-items-center mt-4">
                        <h3>Bratlee Hamint</h3>
                        <ul class="star">
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                           </ul>
                     </div>
                     <img alt="quote" class="quote" src="assets/img/quote.png">
                  </div>
                  <div class="bratlee-hamint item">
                     <p>A good restaurant is like a vacation; it transports you, and it becomes a lot more than just about the food. All great deeds and all great thoughts</p>
                     <div class="d-flex align-items-center mt-4">
                        <h3>Bratlee Hamint</h3>
                        <ul class="star">
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                           </ul>
                     </div>
                     <img alt="quote" class="quote" src="assets/img/quote.png">
                  </div>
               </div>
            </div>
            <div class="col-xl-6">
               <div class="bratlee-img">
                  <img alt="bratlee-hamin2" class="bratlee-hamint-2" src="{{url('/static-image/customer1.jpg')}}">
                  <img alt="bratlee-hamint" class="bratlee-hamint-1" src="{{url('/static-image/customer2.jpg')}}">
                  <img alt="bratlee-hamin3" class="bratlee-hamint-3" src="{{url('/static-image/customer3.jpg')}}">
               </div>
            </div>
         </div>
      </div>
   </section>
   @endsection
