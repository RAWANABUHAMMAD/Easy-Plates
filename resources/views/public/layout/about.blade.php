@extends('public.masterpage')

@section('content')

<section id="center" class="center_o bg-light pt-3 pb-3">
    <div class="container-xl">
     <div class="row center_o1">
      <div class="col-md-12">
         <h6 class="mb-0 col_green"><a href="home">Home</a> <span class="me-2 ms-2"><i class="bi bi-caret-right-fill align-middle text-muted"></i></span> About Us</h6>
      </div>
     </div>
    </div>
</section>
   
<section id="about_pg" class="pt-5 pb-5">
    <div class="container-xl">
     <div class="row about_pg1">
      <div class="col-md-12">
         <h3 class="mb-3">EXPLORE OUR STORIES</h3>
         <p>Welcome to Easy Plates, where we make cooking easier, faster, and more delicious! .</p>
         <p>We believe that cooking should be an enjoyable and stress-free experience. That’s why we provide you with fresh, pre-portioned ingredients and easy-to-follow recipes. No more meal planning or grocery shopping—everything you need to cook a delicious meal is delivered straight to your door in a neatly packed box.</p>
         <p class="mb-0">Whether you're a seasoned chef or a beginner in the kitchen, our diverse recipes and high-quality ingredients ensure a fun and flavorful cooking experience. Join us today and enjoy the convenience of home-cooked meals made simple!.</p>
      </div>
     </div>
    </div>
</section>
   
   
<section id="work" class="pt-5 pb-5 bg-light">
  <div class="container-xl">
      <div class="row trip_1 text-center mb-4">
          <div class="col-md-12">
              <h1 class="col_green">How Easy Plates Works</h1>
          </div>
      </div>
      <div class="row justify-content-center"> <!-- تمت إضافة justify-content-center لمركزة العناصر -->
          <div class="col-md-4 col-sm-6"> <!-- تغيير من col-md-3 إلى col-md-4 -->
              <div class="work_i position-relative">
                  <div class="work_i1 clearfix">
                      <a href="#"><img alt="abc" class="img-fluid" src="assest1/image/21.jpg"></a>
                  </div>
                  <div class="work_i2 text-center clearfix position-absolute w-100">
                      <span class="fs-4 d-inline-block bg_red text-white">1</span>
                  </div>
              </div>
              <div class="work_i_last text-center mt-5">
                  <h5><a href="#">Choose your favorite meals from our website</a></h5>
                  <p class="mb-0">Browse our menu and select the meals that suit your taste. We offer a variety of delicious options for everyone! Simply add your chosen meals to your cart.</p>
              </div>
          </div>
          <div class="col-md-4 col-sm-6"> <!-- تغيير من col-md-3 إلى col-md-4 -->
              <div class="work_i position-relative">
                  <div class="work_i1 clearfix">
                      <a href="#"><img alt="abc" class="img-fluid" src="assest1/image/22.jpg"></a>
                  </div>
                  <div class="work_i2 text-center clearfix position-absolute w-100">
                      <span class="fs-4 d-inline-block bg_red text-white">2</span>
                  </div>
              </div>
              <div class="work_i_last text-center mt-5">
                  <h5><a href="#">Get your delivery</a></h5>
                  <p class="mb-0">Once you confirm your order, we carefully pack a box with all the fresh ingredients you need. Each ingredient is pre-measured to save you time and ensure perfect portions.</p>
              </div>
          </div>
          <div class="col-md-4 col-sm-6"> <!-- تغيير من col-md-3 إلى col-md-4 -->
              <div class="work_i position-relative">
                  <div class="work_i1 clearfix">
                      <a href="#"><img alt="abc" class="img-fluid" src="assest1/image/23.jpg"></a>
                  </div>
                  <div class="work_i2 text-center clearfix position-absolute w-100">
                      <span class="fs-4 d-inline-block bg_red text-white">3</span>
                  </div>
              </div>
              <div class="work_i_last text-center mt-5">
                  <h5><a href="#"> Cook, eat, enjoy!</a></h5>
                  <p class="mb-0">Simply follow the recipe, savor your homemade meal, and enjoy a hassle-free cooking experience!</p>
              </div>
          </div>
      </div>
  </div>
</section>

<section id="faq" class="pb-5">
    <div class="container-xl">
      <div class="faq_top row text-center mb-4">
          <div class="col-md-12">
             <br>
             <h1 class="mb-0">Frequently Asked <br>
   Questions</h1>
          </div>
         </div>
       <div class="row faq_1">
      <div class="col-md-6">
        <div class="faq_1l">
         <div class="accordion" id="accordionExample">
     <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="bi bi-check-circle me-2"></i> What is Easy Plates?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
        <div class="accordion-body">
        <p class="mb-0">Easy Plates is a meal kit service that delivers fresh ingredients and easy-to-follow recipes, allowing you to cook delicious meals at home—without any subscription.</p>
        </div>
      </div>
     </div>
      
     <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <i class="bi bi-check-circle me-2"></i> How does Easy Plates work?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <p class="mb-0">Simply browse our weekly menu, choose the meals you like, and place an order. We’ll deliver fresh, pre-portioned ingredients to your doorstep. Just follow the simple recipe and enjoy!

            .</p>
        </div>
      </div>
    </div>
     
     <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <i class="bi bi-check-circle me-2"></i> Do I need a subscription?
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
           <p class="mb-0">No! Unlike other meal kit services, Easy Plates allows you to order whenever you want. No commitments, no hidden fees—just fresh ingredients and tasty recipes at your convenience.

            .</p>
        </div>
      </div>
    </div>
    
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <i class="bi bi-check-circle me-2"></i> How are the ingredients prepared?
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
        <div class="accordion-body">
           <p class="mb-0">We carefully select fresh, high-quality ingredients and package them in pre-portioned amounts. Each meal kit comes with easy-to-follow recipe instructions to help you prepare your meal at home.</p>
        </div>
      </div>
    </div>
    
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          <i class="bi bi-check-circle me-2"></i> Do you deliver on Weekend?
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
        <div class="accordion-body">
           <p class="mb-0">Yes, we deliver on weekends! You can place an order anytime, and we'll make sure your meal is delivered to you on the weekend as well.</p>
        </div>
      </div>
    </div>
    
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingSix">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          <i class="bi bi-check-circle me-2"></i> Are the ingredients fresh?
        </button>
      </h2>
      <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
        <div class="accordion-body">
           <p class="mb-0">Absolutely! We source high-quality, fresh ingredients from trusted suppliers to ensure you get the best taste and nutrition in every meal.

            .</p>
        </div>
      </div>
    </div>
     
   </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="faq_1r">
            <img src="assest1/image/39.jpg" alt="abc" class="img-fluid">
        </div>
      </div>
     </div>
    </div>
</section>

 @endsection
   