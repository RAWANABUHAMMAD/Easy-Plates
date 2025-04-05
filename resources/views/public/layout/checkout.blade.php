@extends('public.masterpage')

@section('content')

<section id="checkout" class="pt-5 pb-5">
    <div class="container-xl">
      <div class="checkout_1 row row-cols-1 row-cols-md-2">
       <div class="col">
        <div class="checkout_1_left">
          <h4>BILLING DETAILS</h4>
         <hr class="mb-4">
         <h5>Make Your Checkout Here</h5>
          <p>Please register in order to checkout more quickly</p>
          <div class="checkout_1l1 row">
          <div class="col-md-6">
           <h6>First Name <span>*</span></h6>
           <input class="form-control" type="text">
          </div>
          <div class="col-md-6">
           <h6>Last Name <span>*</span></h6>
           <input class="form-control" type="text">
          </div>
         </div>
         <div class="checkout_1l1 row mt-3">
          <div class="col-md-6">
           <h6>Email Address <span>*</span></h6>
           <input class="form-control" type="text">
          </div>
          <div class="col-md-6">
           <h6>Phone Number <span>*</span></h6>
           <input class="form-control" type="text">
          </div>
         </div>
         <div class="checkout_1l1 row  mt-3">
          <div class="col-md-6">
           <h6>Country <span>*</span></h6>
           <select class="form-select">
                    <option>India</option>
                    <option>Paksitan</option>
                    <option>Russia</option>
                    <option>England</option>
                    <option>Nepal</option>
                </select>
          </div>
          <div class="col-md-6">
           <h6>State / Divition <span>*</span></h6>
           <select class="form-select">
                    <option>UP</option>
                    <option>MP</option>
                    <option>Bihar</option>
                    <option>Delhi</option>
                    <option>Jharkhand</option>
                </select>
          </div>
         </div>
         <div class="checkout_1l1 row  mt-3">
          <div class="col-md-6">
           <h6>Address Line 1 <span>*</span></h6>
           <input class="form-control" type="text">
          </div>
          <div class="col-md-6">
           <h6>Address Line 2 <span>*</span></h6>
           <input class="form-control" type="text">
          </div>
         </div>
         <div class="checkout_1l1 row  mt-3">
          <div class="col-md-6">
           <h6>Postal Code <span>*</span></h6>
           <input class="form-control" type="text">
          </div>
          <div class="col-md-6">
           <h6>Company <span>*</span></h6>
           <select class="form-select">
                    <option>Microsoft</option>
                    <option>Xaiomi</option>
                    <option>Apple</option>
                    <option>Samsung</option>
                    <option>Motorola</option>
                </select>
          </div>
         </div>
         <div class="checkout_1l mt-3">
          <div class="form-check">
           <input type="checkbox" class="form-check-input" id="customCheck1">
           <label class="form-check-label" for="customCheck1"><a href="#">Create an account?</a></label>
       </div>
         </div>
        </div>
       </div>
       <div class="col">
        <div class="checkout_1_right shadow p-4">
         <h4>YOUR ORDER</h4>
         <hr class="mb-4">
         <ul>
          <li class="d-flex justify-content-between">
           <span>PRODUCT</span>
           <span>TOTAL</span>
          </li>
           <li class="d-flex mt-3 pt-3 border-top justify-content-between">
           <span>Vestibulum suscipit × 1</span>
           <span>$168.00</span>
          </li>
          <li class="d-flex mt-3 pt-3 border-top justify-content-between">
           <span>Vestibulum suscipit × 2</span>
           <span>$158.00</span>
          </li>
          <li class="d-flex mt-3 pt-3 border-top justify-content-between">
           <b>Cart Subtotal</b>
           <span>	$326.00</span>
          </li>
          <li class="d-flex mt-3 pt-3 border-top justify-content-between">
           <b>Order Total</b>
           <span>	$326.00</span>
          </li>
         </ul>
         <h5 class="mt-4"><a href="#">Direct Bank Transfer.</a></h5>
         <p class="mt-3">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
          <h5 class="mt-4"><a href="#">Cheque Payment</a></h5>
          <h5 class="mt-4"><a href="#">PayPal</a></h5>
          <span class="d-block mt-4"><a class="button button_1 rounded-0 d-block text-center" href="#">PLACE ORDER</a>
        </span>
        </div>
       </div>
      </div>
    </div>
   </section>

   @endsection
