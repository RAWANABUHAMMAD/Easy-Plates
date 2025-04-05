@extends('public.masterpage')

@section('content')

<section id="center" class="center_o bg-light pt-3 pb-3">
    <div class="container-xl">
     <div class="row center_o1">
      <div class="col-md-12">
         <h6 class="mb-0 col_green"><a href="#">Home</a> <span class="me-2 ms-2"><i class="bi bi-caret-right-fill align-middle text-muted"></i></span>  Shopping Cart</h6>
      </div>
     </div>
    </div>
</section>

<section id="cart" class="pt-5 pb-5">
    <div class="container-xl">
     <div class="row cart_1">
         <div class="col-md-12">
           <div class="table-responsive">
             <table class="table table-bordered align-middle text-center">
     <tbody>
        <tr>
         <th scope="col">Remove</th>
         <th scope="col">Images</th>
         <th scope="col">Product</th>
         <th scope="col">Unit Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Total</th>
       </tr>
       <tr>
         <td><i class="bi bi-x-lg"></i></td>
         <td><a href="#"><img src="image/15.jpg" width="100" height="100"></a></td>
        <td><a href="#">Products Name Here</a></td>
         <td>$24.00</td>
          <td><input type="number" min="1" value="1" class="form-control rounded-3 mx-auto bg-dark text-white" placeholder="Qty" style="width:80px; height:50px;"></td>
           <td class="fw-bold">$24.00</td>
       </tr>
       <tr>
        <td><i class="bi bi-x-lg"></i></td>
         <td><a href="#"><img src="image/17.jpg" width="100" height="100"></a></td>
        <td><a href="#">Praesentium Vero Nesciu</a></td>
         <td>$28.00</td>
          <td><input type="number" min="1" value="1" class="form-control rounded-3 mx-auto bg-dark text-white" placeholder="Qty" style="width:80px; height:50px;"></td>
           <td class="fw-bold">$28.00</td>
       </tr>
       <tr>
         <td><i class="bi bi-x-lg"></i></td>
         <td><a href="#"><img src="image/19.jpg" width="100" height="100"></a></td>
        <td><a href="#">Lorem, Ipsum Dolor</a></td>
         <td>$34.00</td>
          <td><input type="number" min="1" value="1" class="form-control rounded-3 mx-auto bg-dark text-white" placeholder="Qty" style="width:80px; height:50px;"></td>
           <td class="fw-bold">$34.00</td>
       </tr>
     </tbody>
   </table>
           </div>
         </div>
     </div>
     <div class="row cart_2 mt-4">
         <div class="col-md-8 col-sm-8">
            <div class="cart_2_left">
             <h3 class="mt-4 mb-3">Cart Totals</h3>
             <div class="table-responsive">
             <table class="table  align-middle w-50 fw-bold">
     <tbody class="border">
     
       <tr>
         <td>Subtotal</td>
         <td class="text-end">$80.00</td>
       </tr>
       <tr>
         <td>Total</td>
         <td class="text-end">$80.00</td>
       </tr>
    
     </tbody>
   </table>
           </div>
           <span class="d-inline-block mt-3"><a class="button button_1  rounded-0" href="checkout">Proceed To Checkout</a>
        </span>
            </div>
         </div>
         <div class="col-md-4 col-sm-4">
            <div class="cart_2_right text-end">
              <span class="d-inline-block"><a class="button button_1 p-3 px-4 rounded-0" href="#">UPDATE CART</a>
        </span>
            </div>
         </div>
     </div>
    </div>
</section>


@endsection