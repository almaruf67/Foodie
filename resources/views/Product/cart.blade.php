@extends('layouts.app')
@section('content')
    <section class="banner" style="background-image:url(https://via.placeholder.com/1920x470)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="title-area-data">
                        <h2>Shop Cart</h2>
                        <p>A magical combination that sent aromas to the taste buds</p>
                    </div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="fa-solid fa-house"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        <li class="breadcrumb-item active" aria-current="page">Shop Cart</li>
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
            <form class="woocommerce-cart-form">
                <div style="overflow-x:auto;overflow-y: hidden;">
                    <table class="shop_table table-responsive">
                        <thead>
                            <tr>
                                <th class="product-name">Product</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-action">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @if (session('cart'))
                                @foreach (session('cart') as $id => $details)
                                    <tr>
                                        <td class="product-name">
                                            <img alt="img" src="{{ asset(  $details['poster'] ) }}" width="111px" height="111px">
                                            <div>
                                                <a href="#">{{ $details['title'] }}</a>
                                                <span>{{ $details['description'] }}</span>
                                            </div>
                                        </td>
                                        <td class="product-quantity">
                                            <input type="number" class="input-text" value="{{ $details['quantity'] }}" >
                                        </td>
                                        @php $sum =$details['quantity'] * $details['price']  @endphp
                                        <td class="product-subtotal">
                                            <span class="woocommerce-Price-amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">$</span>{{ $sum }}</bdi></span>
                                        </td>
                                        <td >
                                          <div rowdel="{{ $id }}" class="actions"><a class="btn btn-outline-danger btn-sm delete-product"><i class="fa-solid fa-trash"></i></a></div>
                                          <div rowup="{{ $id }}" class="actions"><a class="btn btn-outline-danger btn-sm update-product mt-2"><i class="fa-sharp fa-solid fa-circle-check"></i></a></div>
                                          
                                       </td>
                                        
                                    </tr>
                                   
                                @endforeach
                            @endif

                        </tbody>
                        {{-- <tfoot>
                            <tr class="coupon">
                                <td colspan="4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button type="submit" name="apply_coupon" class="apply-coupon"
                                            value="Apply coupon">Apply coupon</button>
                                        <button type="submit" name="update_cart" class="update-cart" value="Update cart"
                                            disabled="" aria-disabled="true">Update Cart</button>
                                    </div>
                                </td>
                            </tr>
                        </tfoot> --}}
                    </table>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="coupon-area">
                            <h3>Apply Coupon</h3>
                            <div class="coupon">
                                <input type="text" name="coupon_code" class="input-text" placeholder="Coupon Code">
                                <button type="submit" name="apply_coupon"><span>Apply coupon</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="cart_totals">
                            <h4>Cart Totals</h4>
                            <div class="shop_table-boder">
                                <table class="shop_table_responsive">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Sub total:</th>
                                            <td>
                                                <span class="woocommerce-Price-amount">
                                                    <bdi>
                                                        <span class="woocommerce-Price-currencySymbol">$</span>{{ session()->get('total'); }}
                                                    </bdi>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="Shipping">
                                            <th>Shipping:</th>
                                            <td>
                                                <span class="woocommerce-Price-amount amount">
                                                    free
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="Total">
                                            <th>Total:</th>
                                            <td>
                                                <span class="woocommerce-Price-amount">
                                                    <bdi>
                                                        <span>$</span>{{ session()->get('total'); }}
                                                    </bdi>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="wc-proceed-to-checkout">
                                <a href="{{ route("checkout") }}" class="button">
                                    <span>Proceed to checkout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@section('scripts')
<script type="text/javascript">
  $(".update-product").change(function (e) {
      e.preventDefault();
      var ele = $(this);
      $.ajax({
          url: '{{ route('updateCart') }}',
          method: "patch",
          data: {
              _token: '{{ csrf_token() }}', 
              id: ele.parents("div").attr("rowup"),
              quantity: document.getElementbyClass('input-text'),
              total: {{ session()->get('total'); }},
          },
          success: function (response) {
             
             window.location.reload();
          }
      });
  });
</script>
@endsection
@endsection
