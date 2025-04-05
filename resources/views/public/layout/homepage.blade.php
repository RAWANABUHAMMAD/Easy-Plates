@extends('public.masterpage')

@section('content')
<section id="center" class="center_home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="assest1/image/1.jpg" class="d-block img-fluid" alt="Fresh Meals">
                <div class="carousel-caption d-md-block text-start">
                    <h1 class="text-uppercase">Fresh</h1>
                    <h1 class="mt-3 mb-3">Healthy Meals, <br>Delivered</h1>
                    <p class="w-50">Enjoy fresh, healthy, and delicious meals delivered right to your doorstep – no hassle, just great food at your convenience!</p>
                    <ul class="mb-0 mt-4">
                        <li class="d-inline-block me-2"><a class="button" href="#">View more <i class="fa fa-long-arrow-right ms-2"></i></a></li>
                        <li class="d-inline-block"><a class="button button_1" href="#">Contact Us <i class="fa fa-long-arrow-right ms-2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="assest1/image/2.jpg" class="d-block img-fluid" alt="Personalized Meal Kits">
                <div class="carousel-caption d-md-block text-start">
                    <h5 class="text-uppercase col_light">Quality Meals at Home</h5>
                    <h1 class="mt-3 mb-3">Personalized Meal Kits <br>Made Easy</h1>
                    <p class="w-50">With Easy Plates, you choose the ingredients, we provide the recipe, and together we bring you the perfect, personalized meal experience every time.</p>
                    <ul class="mb-0 mt-4">
                        <li class="d-inline-block me-2"><a class="button" href="#">View more <i class="fa fa-long-arrow-right ms-2"></i></a></li>
                        <li class="d-inline-block"><a class="button button_1" href="#">Contact Us <i class="fa fa-long-arrow-right ms-2"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Additional Content Section (Optional) -->
<section id="why_choose" class="pt-5 pb-5 bg-light">
  <div class="container-xl">
      <div class="row justify-content-center">
          <div class="col-md-12 text-center">
              <h2 class="mb-4">Why Choose Us?</h2>
              <div class="underline mb-5 mx-auto"></div>
          </div>
      </div>
      
      <div class="row">
          <div class="col-md-4 text-center mb-4 mb-md-0">
              <div class="p-4 h-100 shadow-sm bg-white rounded">
                  <span class="d-inline-block mb-3 col_red"> 
                      <i class="bi bi-heart-fill fs-1"></i>
                  </span>
                  <h3 class="mb-3">Fresh Ingredients</h3>
                  <p class="mb-0">We use only the freshest ingredients to prepare your meals with the highest quality standards.</p>
              </div>
          </div>
          
          <div class="col-md-4 text-center mb-4 mb-md-0">
              <div class="p-4 h-100 shadow-sm bg-white rounded">
                  <span class="d-inline-block mb-3 col_red"> 
                      <i class="bi bi-lightning-fill fs-1"></i>
                  </span>
                  <h3 class="mb-3">Quick Delivery</h3>
                  <p class="mb-0">Get your meals delivered quickly and efficiently right to your doorstep within minutes.</p>
              </div>
          </div>
          
          <div class="col-md-4 text-center">
              <div class="p-4 h-100 shadow-sm bg-white rounded">
                  <span class="d-inline-block mb-3 col_red"> 
                      <i class="bi bi-gear-fill fs-1"></i>
                  </span>
                  <h3 class="mb-3">Customizable</h3>
                  <p class="mb-0">Choose your preferred ingredients and customize your meals exactly how you like them.</p>
              </div>
          </div>
      </div>
  </div>
</section>

<section id="popular" class="pt-5 pb-5">
  <div class="container-xl">
      <!-- العنوان الرئيسي -->
      <div class="row mb-4">
          <div class="col-md-12 text-center">
              <h1 class="mb-0">Most Popular Recipes</h1>
          </div>
      </div>
      
      <!-- وصفات شعبية -->
      <div class="row row-cols-1 row-cols-md-2 g-0"> <!-- g-0 لإزالة الفراغات بين الأعمدة -->
          <!-- الوصفة الأولى -->
          <div class="col">
              <div class="popular-item position-relative">
                  <div class="popular-img">
                      <a href="#">
                          <img src="assest1/image/9.jpg" class="img-fluid w-100" alt="Popular Recipe 1">
                      </a>
                  </div>
              </div>
          </div>
          
          <!-- الوصفة الثانية -->
          <div class="col">
              <div class="popular-item position-relative">
                  <div class="popular-img">
                      <a href="#">
                          <img src="assest1/image/10.jpg" class="img-fluid w-100" alt="Popular Recipe 2">
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
  
  <section id="spec" class="pt-5 pb-5 bg-light">
    <div class="container-xl">
      <div class="row center_h1">
        <div class="col-md-2 col-sm-6">
          <div class="center_h1i text-center">
            <a href="#"><img class="img-fluid rounded-circle" alt="abc" src="assest1/image/14.jpg"></a>
            <h6 class="mb-0 mt-2"><a href="#">APPETIZER</a></h6>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="center_h1i text-center">
            <a href="#"><img class="img-fluid rounded-circle" alt="abc" src="assest1/image/15.jpg"></a>
            <h6 class="mb-0 mt-2"><a href="#">PASTA</a></h6>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="center_h1i text-center">
            <a href="#"><img class="img-fluid rounded-circle" alt="abc" src="assest1/image/16.jpg"></a>
            <h6 class="mb-0 mt-2"><a href="#">BREAD</a></h6>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="center_h1i text-center">
            <a href="#"><img class="img-fluid rounded-circle" alt="abc" src="assest1/image/17.jpg"></a>
            <h6 class="mb-0 mt-2"><a href="#">VEGAN</a></h6>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="center_h1i text-center">
            <a href="#"><img class="img-fluid rounded-circle" alt="abc" src="assest1/image/18.jpg"></a>
            <h6 class="mb-0 mt-2"><a href="#">BAKERY</a></h6>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="center_h1i text-center">
            <a href="#"><img class="img-fluid rounded-circle" alt="abc" src="assest1/image/19.jpg"></a>
            <h6 class="mb-0 mt-2"><a href="#">BEVERAGES</a></h6>
          </div>
        </div>
      </div>
    </div>
  </section>


<section id="trend" class="pt-5 pb-5 bg-light">
    <div class="container-xl">
     <div class="row popular_1 text-center mb-4">
      <div class="col-md-12">
       <h1>Perfect for This Season</h1>
      </div>
     </div>
     
     <div class="row row-cols-1 row-cols-md-3 popular_2 popular_2o">
      <div class="col">
       <div class="popular_2_left position-relative">
        <div class="popular_2_left1">
         <a href="#"><img src="assest1/image/30.jpg" class="img-fluid" alt="abc"></a>
        </div>
         <div class="popular_2_left2 position-absolute bg_back w-100 h-100 top-0 px-4">
           <h2><a class="text-white link" href="#">Instant Pot Recipes</a></h2>
           <span class="text-white font_12">SOUP  <i class="bi-chat ms-2 me-1"></i> 3</span>
         </div>
          <div class="popular_2_left3 position-absolute top-0 w-100 pt-3">
            <ul class="mb-0 justify-content-between d-flex">
             <li>
              <span class="d-inline-block bg-black text-white py-2 px-4 span_1  font_13">March 18, 2021</span>
             </li>
             <li class="pe-3">
               <span><a  class="d-inline-block bg-white col_red text-center span_2   rounded-circle" href="#"><i class="bi-heart-fill"></i></a></span>
             </li>
            </ul>
          </div>
       </div>
      </div>
      <div class="col">
       <div class="popular_2_left position-relative">
        <div class="popular_2_left1">
         <a href="#"><img src="assest1/image/31.jpg" class="img-fluid" alt="abc"></a>
        </div>
         <div class="popular_2_left2 position-absolute bg_back w-100 h-100 top-0 px-4">
           <h2><a class="text-white link" href="#">Crusty Bread</a></h2>
           <span class="text-white font_12">BREAD  <i class="bi-chat ms-2 me-1"></i> 4</span>
         </div>
          <div class="popular_2_left3 position-absolute top-0 w-100 pt-3">
            <ul class="mb-0 justify-content-between d-flex">
             <li>
              <span class="d-inline-block bg-black text-white py-2 px-4 span_1  font_13">March 12, 2024</span>
             </li>
             <li class="pe-3">
               <span><a  class="d-inline-block bg-white col_red text-center span_2   rounded-circle" href="#"><i class="bi-heart-fill"></i></a></span>
             </li>
            </ul>
          </div>
       </div>
      </div>
      <div class="col">
       <div class="popular_2_left position-relative">
        <div class="popular_2_left1">
         <a href="#"><img src="assest1/image/32.jpg" class="img-fluid" alt="abc"></a>
        </div>
         <div class="popular_2_left2 position-absolute bg_back w-100 h-100 top-0 px-4">
           <h2><a class="text-white link" href="#">Molted Food</a></h2>
           <span class="text-white font_12">SWEET  <i class="bi-chat ms-2 me-1"></i> 6</span>
         </div>
          <div class="popular_2_left3 position-absolute top-0 w-100 pt-3">
            <ul class="mb-0 justify-content-between d-flex">
             <li>
              <span class="d-inline-block bg-black text-white py-2 px-4 span_1  font_13">March 16, 2024</span>
             </li>
             <li class="pe-3">
               <span><a  class="d-inline-block bg-white col_red text-center span_2   rounded-circle" href="#"><i class="bi-heart-fill"></i></a></span>
             </li>
            </ul>
          </div>
       </div>
      </div>
     </div>
     <div class="row row-cols-1 row-cols-md-3 popular_2 popular_2o mt-4">
      <div class="col">
       <div class="popular_2_left position-relative">
        <div class="popular_2_left1">
         <a href="#"><img src="assest1/image/33.jpg" class="img-fluid" alt="abc"></a>
        </div>
         <div class="popular_2_left2 position-absolute bg_back w-100 h-100 top-0 px-4">
           <h2><a class="text-white link" href="#">Instant Pot Recipes</a></h2>
           <span class="text-white font_12">SOUP  <i class="bi-chat ms-2 me-1"></i> 3</span>
         </div>
          <div class="popular_2_left3 position-absolute top-0 w-100 pt-3">
            <ul class="mb-0 justify-content-between d-flex">
             <li>
              <span class="d-inline-block bg-black text-white py-2 px-4 span_1  font_13">March 18, 2021</span>
             </li>
             <li class="pe-3">
               <span><a  class="d-inline-block bg-white col_red text-center span_2   rounded-circle" href="#"><i class="bi-heart-fill"></i></a></span>
             </li>
            </ul>
          </div>
       </div>
      </div>
      <div class="col">
       <div class="popular_2_left position-relative">
        <div class="popular_2_left1">
         <a href="#"><img src="assest1/image/34.jpg" class="img-fluid" alt="abc"></a>
        </div>
         <div class="popular_2_left2 position-absolute bg_back w-100 h-100 top-0 px-4">
           <h2><a class="text-white link" href="#">Crusty Bread</a></h2>
           <span class="text-white font_12">BREAD  <i class="bi-chat ms-2 me-1"></i> 4</span>
         </div>
          <div class="popular_2_left3 position-absolute top-0 w-100 pt-3">
            <ul class="mb-0 justify-content-between d-flex">
             <li>
              <span class="d-inline-block bg-black text-white py-2 px-4 span_1  font_13">March 12, 2024</span>
             </li>
             <li class="pe-3">
               <span><a  class="d-inline-block bg-white col_red text-center span_2   rounded-circle" href="#"><i class="bi-heart-fill"></i></a></span>
             </li>
            </ul>
          </div>
       </div>
      </div>
      <div class="col">
       <div class="popular_2_left position-relative">
        <div class="popular_2_left1">
         <a href="#"><img src="assest1/image/35.jpg" class="img-fluid" alt="abc"></a>
        </div>
         <div class="popular_2_left2 position-absolute bg_back w-100 h-100 top-0 px-4">
           <h2><a class="text-white link" href="#">Molted Food</a></h2>
           <span class="text-white font_12">SWEET  <i class="bi-chat ms-2 me-1"></i> 6</span>
         </div>
          <div class="popular_2_left3 position-absolute top-0 w-100 pt-3">
            <ul class="mb-0 justify-content-between d-flex">
             <li>
              <span class="d-inline-block bg-black text-white py-2 px-4 span_1  font_13">March 16, 2024</span>
             </li>
             <li class="pe-3">
               <span><a  class="d-inline-block bg-white col_red text-center span_2   rounded-circle" href="#"><i class="bi-heart-fill"></i></a></span>
             </li>
            </ul>
          </div>
       </div>
      </div>
     </div>
    </div>
</section>
   
   <section id="latest" class="pt-5 pb-5">
    <div class="container-xl">
     <div class="row popular_1 text-center mb-4">
      <div class="col-md-12">
       <h1>Perfect for This Season</h1>
      </div>
     </div>
     <div class="row row-cols-1 row-cols-md-1 popular_2 popular_2o">
      <div class="col">
       <div class="popular_2_left position-relative">
        <div class="popular_2_left1">
         <a href="#"><img src="assest1/image/2.jpg" class="img-fluid" alt="abc"></a>
        </div>
         </div>
      </div>
     </div>
    </div>
 </section>


@endsection