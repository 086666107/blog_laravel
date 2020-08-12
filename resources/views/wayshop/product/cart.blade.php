  @extends('wayshop.masster')
  @section('content')
  <!-- Start All Title Box -->
  <div class="all-title-box">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h2>Cart</h2>
                  <ul class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Shop</a></li>
                      <li class="breadcrumb-item active">Cart</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <!-- End All Title Box -->
  @if(Session::has('messageSMG'))
  <div class="alert alert-sm alert alert-primary alert-block" role=aler>
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times</span>
      </button>
      <strong>{!!session('messageSMG')!!}</strong>
  </div>
  @endif
  <!-- Start Cart  -->
  <div class="cart-box-main">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="table-main table-responsive">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>Images</th>
                                  <th>Product Name</th>
                                  <th>Price</th>
                                  <th>Quantity</th>
                                  <th>Total</th>
                                  <th>Remove</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($userCart as $cart)
                              <tr>
                                  <td class="thumbnail-img">
                                      <a href="#">
                                          <img class="img-fluid" src="{{asset('/upload/'.$cart->image)}}" alt="" />
                                      </a>
                                  </td>
                                  <td class="name-pr">

                                      {{$cart->product_name}}
                                      <p>Code: {{$cart->product_code}} | Size: {{$cart->size}} </p>
                                      </a>
                                  </td>
                                  <td class="price-pr">
                                      <p>$ {{$cart->price}}</p>
                                  </td>
                                  <td class="quantity-box">
                                      <a href="{{url('/cart-update-quatity/'.$cart->id. '/ 1' )}}" style="font-size:25px;"> + </a>
                                      ​<input type="number" size="4" value="{{$cart->quatity}}" min="0" step="1" class="c-input-text qty text">
                                    @if($cart->quatity>1)    
                                      <a href="{{url('/cart-update-quatity/'.$cart->id. '/-1' )}}" style="font-size:25px;"> - </a>
                                  @endif
                                    </td>

                                  <td class="total-pr">
                                      <p>$ {{$cart->price*$cart->quatity}}</p>
                                  </td>
                                  <td class="remove-pr">
                                      <a href="{{url('/cart/delete-product/'.$cart->id)}}">
                                          <i class="fas fa-times"></i>
                                      </a>
                                  </td>
                              </tr>

                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>

          <div class="row my-5">
              <div class="col-lg-6 col-sm-6">
                  <div class="coupon-box">
                      <div class="input-group input-group-sm">
                          <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                          <div class="input-group-append">
                              <button class="btn btn-theme" type="button">Apply Coupon</button>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                  <div class="update-box">
                      <input value="Update Cart" type="submit">
                  </div>
              </div>
          </div>

          <div class="row my-5">
              <div class="col-lg-8 col-sm-12"></div>
              <div class="col-lg-4 col-sm-12">
                  <div class="order-box">
                      <h3>Order summary</h3>
                      <div class="d-flex">
                          <h4>Sub Total</h4>
                          <div class="ml-auto font-weight-bold"> $ 0 </div>
                      </div>
                      <div class="d-flex">
                          <h4>Discount</h4>
                          <div class="ml-auto font-weight-bold"> $ 0 </div>
                      </div>
                      <hr class="my-1">
                      <div class="d-flex">
                          <h4>Coupon Discount</h4>
                          <div class="ml-auto font-weight-bold"> $ 0 </div>
                      </div>
                      <div class="d-flex">
                          <h4>Tax</h4>
                          <div class="ml-auto font-weight-bold"> $ 0 </div>
                      </div>
                      <div class="d-flex">
                          <h4>Shipping Cost</h4>
                          <div class="ml-auto font-weight-bold"> Free </div>
                      </div>
                      <hr>
                      <div class="d-flex gr-total">
                          <h5>Grand Total</h5>
                          <div class="ml-auto h5"> $ 0</div>
                      </div>
                      <hr>
                  </div>
              </div>
              <div class="col-12 d-flex shopping-box"><a href="checkout.html" class="ml-auto btn hvr-hover">Checkout</a> </div>
          </div>

      </div>
  </div>
  <!-- End Cart -->



  @endsection