@extends('public.masterpage')

@section('content')

<section id="center" class="center_o bg-light pt-3 pb-3">
    <div class="container-xl">
     <div class="row center_o1">
      <div class="col-md-12">
         <h6 class="mb-0 col_green"><a href="#">Home</a> <span class="me-2 ms-2"><i class="bi bi-caret-right-fill align-middle text-muted"></i></span> Recipe Details</h6>
      </div>
     </div>
    </div>
</section>

<section id="shop_dt" class="pt-5 pb-5">
    <div class="container-xl">
        <div class="row shop_dt1 row-cols-1 row-cols-md-2">
            <div class="col">
                <div class="shop_dt1_left carousel_p">
                    <img src="assest1/image/50.jpg" class="d-block img-fluid w-100" alt="abc">
                </div>
                <h6 class="mt-3">
                    <div class="d-flex align-items-center mb-3">
                        <a class="button" href="shop_detail.html">ADD TO CART</a>
                        
                        <input type="number" min="1" value="1" class="form-control rounded-0 me-3" placeholder="Qty" style="width:80px; height:50px;">
                    </div>
                </h6>
            </div>
            <div class="col">
                <div class="shop_dt1_right">
                    <h1>Ipsum Augue Quis Porta</h1>
                    
                    <!-- Ingredients & Description Section -->
                    <div class="mt-4">
                        <h4 class="mb-3">Ingredients</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="homeil">
                                    <h6 class="mb-0"><i class="bi-check2 col_green me-2"></i> Whole Raw Almonds <span class="float-end font_14 text-muted">1 cup</span></h6><hr>
                                    <h6 class="mb-0"><i class="bi-check2 col_green me-2"></i> Fresh Rosemary <span class="float-end font_14 text-muted">1½ tbsp</span></h6><hr>
                                    <h6 class="mb-0"><i class="bi-check2 col_green me-2"></i> All Purpose Flour <span class="float-end font_14 text-muted">1 cup</span></h6><hr>
                                    <h6 class="mb-0"><i class="bi-check2 col_green me-2"></i> Whole Milk Ricotta Cheese <span class="float-end font_14 text-muted">1½ cups</span></h6>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="homeil">
                                    <h6 class="mb-0"><i class="bi-check2 col_green me-2"></i> Extra Virgin Olive Oil <span class="float-end font_14 text-muted">⅔ cup</span></h6><hr>
                                    <h6 class="mb-0"><i class="bi-check2 col_green me-2"></i> Blood Oranges (Small, Cara Cara, or Valencia) <span class="float-end font_14 text-muted">3 grams</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Description Section -->
                    <div class="mt-4">
                        <h4 class="mb-3">Description</h4>
                        <ul class="font_15 mb-0">
                            <li class="d-flex">  <i class="bi-1-circle-fill fs-1 me-3 col_green lh-1"></i> Preheat oven to 350ºF/180ºC/gas 4. Generously spray two 12-cup muffin pans with cooking spray. Sprinkle the bottom of each cavity with a couple pinches of sugar. Set aside.</li>
                            <li class="d-flex mt-3">  <i class="bi-2-circle-fill fs-1 me-3 col_green lh-1"></i> Pour the almond mixture from blender in a small mixing bowl. Add all-purpose flour, baking powder, baking soda, and salt. Whisk to combine, and set aside.</li>
                            <li class="d-flex mt-3">  <i class="bi-3-circle-fill fs-1 me-3 col_green lh-1"></i> Place ricotta cheese, olive oil, orange zest and sugar into the blender. Pulse 5 times to incorporate. Remove the lid cap and add eggs, one at a time, pulsing once after each addition. Replace lid cap.</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Second Row for Reviews -->
        <div class="row shop_dt2 mt-5">
            <div class="col-md-12">
                <ul class="nav nav-tabs mb-0 flex-wrap tab_click border-0 justify-content-center">
                    <li class="nav-item">
                        <a href="#profile3" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                            <span class="d-md-block">REVIEWS</span>
                        </a>
                    </li>
                </ul>
                
                <div class="tab-content mt-5">
                    <div class="tab-pane active" id="profile3">
                        <div class="shadow p-4 profile3_inner">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="profile3_inner1_left">
                                        <h5>Write Your Own Review</h5>
                                        <b class="d-block">Add A Review</b>
                                        <p class="mt-3">Your email address will not be published. Required fields are marked</p>
                                        <span>Your Rating</span>
                                        <span class="d-block text-warning mt-2 font_14">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                        </span>
                                        <h5 class="mt-3">Customer Reviews</h5>
                                        <span class="d-block text-warning mt-2 font_14">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="profile3_inner1_right">
                                        <h5>Add a Review</h5>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <textarea placeholder="Write Review*" class="form-control form_text mt-3"></textarea>
                                        <input class="form-control mt-3" placeholder="Name*" type="text">
                                        <input class="form-control mt-3" placeholder="Email*" type="text">
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Save my name, email, and website in this browser for the next time I comment.
                                            </label>
                                        </div>
                                        <h6 class="mb-0 mt-4 text-center"><a class="button" href="#">Post Review</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection
