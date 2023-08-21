@extends('layouts.app')
@section('content')
<section class="banner" style="background-image:url(https://via.placeholder.com/1920x410)">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-lg-7">
             <div class="title-area-data">
                <h2>Login</h2>
                <p>A magical combination that sent aromas to the taste buds</p>
             </div>
             <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">login</li>
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
         <div class="col-lg-6" >
           <div class="box login">
             <h3>Log In Your Account</h3>
             <form method="POST" action="{{ route('login') }}">
                @csrf
               <input type="email" name="email" placeholder="Username or email address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
               @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
               <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

               @error('password')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
               <div class="remember">
                 <div class="first">
                   <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                   <label for="remember">Remember me</label>
                 </div>
                 @if (Route::has('password.request'))
                 <div class="second">
                    <a href="{{ route('password.request') }}">Forget a Password?</a>
                  </div>
                @endif
                 
               </div>
               <button type="submit" class="button">Login</button>
             </form>
           </div>
         </div>
         <div class="col-lg-6">
           <div class="box register">
             <div class="parallax" style="background-image: url(assets/img/patron.jpg)"></div>
             <h3>Register Your Account</h3>
             <form method="POST" action="{{ route('register') }}">
                @csrf
               <input id="name" type="text" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

               @error('name')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
               
               <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
               <input id="password" type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

               @error('password')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
               <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
               <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
               <button type="submit" class="button">{{ __('Register') }}</button>
             </form>
           </div>
         </div>
       </div>
    </div>
 </section>

@endsection

