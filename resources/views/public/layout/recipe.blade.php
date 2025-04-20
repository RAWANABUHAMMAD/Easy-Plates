{{-- @extends('public.masterpage')

@section('content')

<section id="center" class="center_o bg-light pt-3 pb-3">
    <div class="container-xl">
     <div class="row center_o1">
      <div class="col-md-12">
         <h6 class="mb-0 col_green"><a href="#">Home</a> <span class="me-2 ms-2"><i class="bi bi-caret-right-fill align-middle text-muted"></i></span> Recipes</h6>
      </div>
     </div>
    </div>
</section>


<section id="shop" class="pt-5 pb-5">
    <div class="container-xl">
        <div class="row shop_1">
            <!-- Left Sidebar - Filters -->
            <div class="col-lg-3 col-md-4">
                <div class="shop_1_left">
                    <!-- Difficulty Filter -->
                    <div class="shop_1_left1 shadow p-3">
                        <h5>FILTER</h5>
                        <hr class="line mb-3">
                        
                        <b class="d-block mb-3">FILTER BY DIFFICULTY</b>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="difficultyAll" checked>
                            <label class="form-check-label" for="difficultyAll">
                                <a href="shop_detail.html">All (65)</a>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="difficultyEasy">
                            <label class="form-check-label" for="difficultyEasy">
                                <a href="shop_detail.html">Easy (25)</a>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="difficultyHard">
                            <label class="form-check-label" for="difficultyHard">
                                <a href="shop_detail.html">Hard (40)</a>
                            </label>
                        </div>
                        
                        <!-- Price Filter -->
                        <b class="d-block mb-3 mt-4">FILTER BY PRICE</b>
                        <input type="range" class="form-range" id="customRange1">
                        <span>Price: <b class="ms-2">Lowest to Highest</b></span>
                    </div>
                    
                    <!-- Category Filter -->
                    <div class="shop_1_left1 shadow p-3 mt-4">
                        <h5>CATEGORY</h5>
                        <hr class="line mb-4">
                        <ul class="mb-0 ms-2">
                            @foreach ($categories as $category)
                                <li class="border-top pt-3 mt-3">
                                    <a class="justify-content-between d-flex" href="{{ url('shop_detail?category_id=' . $category->id) }}">
                                        <span><i class="bi bi-arrow-right col_red font_14 me-1"></i> {{ $category->name }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Right Content - Products -->
            <div class="col-lg-9 col-md-8">
                <div class="shop_1_right">
                    <!-- Header with results count and view toggle -->
                    <div class="shop_1_right1 row">
                        <div class="col-md-5 col-5">
                            <div class="shop_1_right1_left mt-2">
                                <b><span class="col_red">09</span> Product Found of <span class="col_red">30</span></b>
                            </div>
                        </div>
                        <div class="col-md-7 col-7">
                            <div class="shop_1_right1_right">
                                <ul class="nav nav-tabs mb-0 flex-wrap fs-5 tab_click border-0 justify-content-end">
                                    <li class="nav-item">
                                        <a href="#profile1" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                            <span class="d-md-block"><i class="bi bi-grid"></i></span>
                                        </a>
                                    </li>
                                    <li class="nav-item ms-2">
                                        <a href="#profile2" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            <span class="d-md-block"><i class="bi bi-list"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Listing -->
                    <div class="row shop_1_right2 mt-4">
                        <div class="col-md-12">
                            <div class="tab-content">
                                <!-- Grid View -->
                                <div class="tab-pane active" id="profile1">
                                    <!-- First Row of Products -->
                                    <div class="shop_h1_inner row row-cols-1 row-cols-md-3 row-cols-sm-1">
                                        <!-- Product 1 -->
                                        <div class="col">
                                            <div class="shop_h1_inner_left border_light p-3">
                                                <div class="shop_h1_inner_left1 position-relative">
                                                    <div class="shop_h1_inner_left1_inner">
                                                        <a href="shop_detail.html"><img src="assest1/image/30.jpg" alt="abc" class="img-fluid"></a>
                                                    </div>
                                                    <div class="shop_h1_inner_left1_inner1 position-absolute bottom-0 text-center p-4 w-100">
                                                        <ul class="mb-0 cart_link">
                                                            <li class="d-inline-block">
                                                                <a class="d-inline-block text-center rounded_10" href="cart"><i class="bi bi-bag"></i></a>
                                                            </li>
                                                            <li class="d-inline-block">
                                                                <a class="d-inline-block text-center rounded_10" href="detail"><i class="bi bi-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Product 2 -->
                                        <div class="col">
                                            <div class="shop_h1_inner_left border_light p-3">
                                                <div class="shop_h1_inner_left1 position-relative">
                                                    <div class="shop_h1_inner_left1_inner">
                                                        <a href="shop_detail.html"><img src="image/31.jpg" alt="abc" class="img-fluid"></a>
                                                    </div>
                                                    <div class="shop_h1_inner_left1_inner1 position-absolute bottom-0 text-center p-4 w-100">
                                                        <ul class="mb-0 cart_link">
                                                            <li class="d-inline-block">
                                                                <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-bag"></i></a>
                                                            </li>
                                                            <li class="d-inline-block">
                                                                <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Product 3 -->
                                        <div class="col">
                                            <div class="shop_h1_inner_left border_light p-3">
                                                <div class="shop_h1_inner_left1 position-relative">
                                                    <div class="shop_h1_inner_left1_inner">
                                                        <a href="shop_detail.html"><img src="image/32.jpg" alt="abc" class="img-fluid"></a>
                                                    </div>
                                                    <div class="shop_h1_inner_left1_inner1 position-absolute bottom-0 text-center p-4 w-100">
                                                        <ul class="mb-0 cart_link">
                                                            <li class="d-inline-block">
                                                                <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-bag"></i></a>
                                                            </li>
                                                            <li class="d-inline-block">
                                                                <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Second Row of Products -->
                                    <div class="shop_h1_inner row row-cols-1 row-cols-md-3 row-cols-sm-1 mt-4">
                                        <!-- Product 4 -->
                                        <div class="col">
                                            <div class="shop_h1_inner_left border_light p-3">
                                                <div class="shop_h1_inner_left1 position-relative">
                                                    <div class="shop_h1_inner_left1_inner">
                                                        <a href="shop_detail.html"><img src="image/33.jpg" alt="abc" class="img-fluid"></a>
                                                    </div>
                                                    <div class="shop_h1_inner_left1_inner1 position-absolute bottom-0 text-center p-4 w-100">
                                                        <ul class="mb-0 cart_link">
                                                            <li class="d-inline-block">
                                                                <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-bag"></i></a>
                                                            </li>
                                                            <li class="d-inline-block">
                                                                <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Product 5 -->
                                        <div class="col">
                                            <div class="shop_h1_inner_left border_light p-3">
                                                <div class="shop_h1_inner_left1 position-relative">
                                                    <div class="shop_h1_inner_left1_inner">
                                                        <a href="shop_detail.html"><img src="image/34.jpg" alt="abc" class="img-fluid"></a>
                                                    </div>
                                                    <div class="shop_h1_inner_left1_inner1 position-absolute bottom-0 text-center p-4 w-100">
                                                        <ul class="mb-0 cart_link">
                                                            <li class="d-inline-block">
                                                                <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-bag"></i></a>
                                                            </li>
                                                            <li class="d-inline-block">
                                                                <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Product 6 -->
                                        <div class="col">
                                            <div class="shop_h1_inner_left border_light p-3">
                                                <div class="shop_h1_inner_left1 position-relative">
                                                    <div class="shop_h1_inner_left1_inner">
                                                        <a href="shop_detail.html"><img src="image/35.jpg" alt="abc" class="img-fluid"></a>
                                                    </div>
                                                    <div class="shop_h1_inner_left1_inner1 position-absolute bottom-0 text-center p-4 w-100">
                                                        <ul class="mb-0 cart_link">
                                                            <li class="d-inline-block">
                                                                <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-bag"></i></a>
                                                            </li>
                                                            <li class="d-inline-block">
                                                                <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- List View -->
                                <div class="tab-pane" id="profile2">
                                    <!-- Product 1 in List View -->
                                    <div class="shop_1_right2_inner row">
                                        <div class="col-md-4">
                                            <div class="shop_1_right2_inner_left">
                                                <a href="shop_detail.html"><img src="image/30.jpg" alt="abc" class="img-fluid"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="shop_1_right2_inner_right">
                                                <h5><a href="shop_detail.html">Lorem, ipsum dolor</a></h5>
                                                <span class="d-block col_red mt-3">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star"></i>
                                                </span>
                                                <h4 class="mt-3">$22.00</h4>
                                                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                                <ul class="mb-0 cart_link">
                                                    <li class="d-inline-block">
                                                        <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-bag"></i></a>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-eye"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Product 2 in List View -->
                                    <div class="shop_1_right2_inner row border-top mt-4 pt-4">
                                        <div class="col-md-4">
                                            <div class="shop_1_right2_inner_left">
                                                <a href="shop_detail.html"><img src="image/31.jpg" alt="abc" class="img-fluid"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="shop_1_right2_inner_right">
                                                <h5><a href="shop_detail.html">Sit amet consecte elit</a></h5>
                                                <span class="d-block col_red mt-3">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i>
                                                    <i class="bi bi-star"></i>
                                                </span>
                                                <h4 class="mt-3">$28.00</h4>
                                                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                                <ul class="mb-0 cart_link">
                                                    <li class="d-inline-block">
                                                        <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-bag"></i></a>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-eye"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Product 3 in List View -->
                                    <div class="shop_1_right2_inner row border-top mt-4 pt-4">
                                        <div class="col-md-4">
                                            <div class="shop_1_right2_inner_left">
                                                <a href="shop_detail.html"><img src="image/32.jpg" alt="abc" class="img-fluid"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="shop_1_right2_inner_right">
                                                <h5><a href="shop_detail.html">Atque earum ullam </a></h5>
                                                <span class="d-block col_red mt-3">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </span>
                                                <h4 class="mt-3">$33.00</h4>
                                                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                                <ul class="mb-0 cart_link">
                                                    <li class="d-inline-block">
                                                        <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-bag"></i></a>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-eye"></i></a>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-heart"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Product 4 in List View -->
                                    <div class="shop_1_right2_inner row border-top mt-4 pt-4">
                                        <div class="col-md-4">
                                            <div class="shop_1_right2_inner_left">
                                                <a href="shop_detail.html"><img src="image/33.jpg" alt="abc" class="img-fluid"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="shop_1_right2_inner_right">
                                                <h5><a href="shop_detail.html">Sed augue amet </a></h5>
                                                <span class="d-block col_red mt-3">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i>
                                                </span>
                                                <h4 class="mt-3">$45.00</h4>
                                                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                                <ul class="mb-0 cart_link">
                                                    <li class="d-inline-block">
                                                        <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-bag"></i></a>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-eye"></i></a>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-heart"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Product 5 in List View -->
                                    <div class="shop_1_right2_inner row border-top mt-4 pt-4">
                                        <div class="col-md-4">
                                            <div class="shop_1_right2_inner_left">
                                                <a href="shop_detail.html"><img src="image/34.jpg" alt="abc" class="img-fluid"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="shop_1_right2_inner_right">
                                                <h5><a href="shop_detail.html">Ipsum nulla quis </a></h5>
                                                <span class="d-block col_red mt-3">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i>
                                                </span>
                                                <h4 class="mt-3">$59.00</h4>
                                                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                                <ul class="mb-0 cart_link">
                                                    <li class="d-inline-block">
                                                        <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-bag"></i></a>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-eye"></i></a>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        <a class="d-inline-block text-center rounded_10" href="shop_detail.html"><i class="bi bi-heart"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Pagination -->
                            <div class="paging">
                                <ul class="mb-0 paginate text-center mt-5">
                                    <li class="d-inline-block mt-1 mb-1"><a class="border d-block" href="shop_detail.html"><i class="bi bi-chevron-left"></i> </a></li>
                                    <li class="d-inline-block mt-1 mb-1"><a class="border d-block active" href="shop_detail.html">1</a></li>
                                    <li class="d-inline-block mt-1 mb-1"><a class="border d-block" href="shop_detail.html">2</a></li>
                                    <li class="d-inline-block mt-1 mb-1"><a class="border d-block" href="shop_detail.html">3</a></li>
                                    <li class="d-inline-block mt-1 mb-1"><a class="border d-block" href="shop_detail.html">4</a></li>
                                    <li class="d-inline-block mt-1 mb-1"><a class="border d-block" href="shop_detail.html">5</a></li>
                                    <li class="d-inline-block mt-1 mb-1"><a class="border d-block" href="shop_detail.html">6</a></li>
                                    <li class="d-inline-block mt-1 mb-1"><a class="border d-block" href="shop_detail.html"><i class="bi bi-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection --}}
@extends('public.masterpage')

@section('content')

<style>
    .recipe-card {
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .recipe-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .recipe-img-container {
        height: 250px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .recipe-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .recipe-img-container:hover .recipe-img {
        transform: scale(1.05);
    }
    .recipe-body {
        flex: 1;
        display: flex;
        flex-direction: column;
        padding: 1.25rem;
    }
    .recipe-title {
        font-size: 1.1rem;
        margin-bottom: 0.75rem;
        color: #333;
    }
    .recipe-price {
        font-size: 1.2rem;
        color: #e74c3c;
        font-weight: 600;
        margin-top: auto;
    }
    .cart-link {
        background: rgba(255,255,255,0.9);
        padding: 10px 0;
    }
    .cart-btn, .view-btn {
        width: 35px;
        height: 35px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.3s ease;
        background-color: #28a745; /* اللون الأخضر المطلوب */
        color: white;
    }
    .cart-btn:hover, .view-btn:hover {
        background-color: #218838;
        transform: scale(1.1);
    }
    .cart-btn {
        margin-right: 5px;
    }
</style>

<section id="center" class="center_o bg-light pt-3 pb-3">
    <div class="container-xl">
        <div class="row center_o1">
            <div class="col-md-12">
                <h6 class="mb-0 col_green"><a href="#">Home</a> <span class="me-2 ms-2"><i class="bi bi-caret-right-fill align-middle text-muted"></i></span> Recipes</h6>
            </div>
        </div>
    </div>
</section>

<section id="shop" class="pt-5 pb-5">
    <div class="container-xl">
        <div class="row shop_1">
            <!-- Left Sidebar - Filters -->
            <div class="col-lg-3 col-md-4">
                <div class="shop_1_left">
                    <!-- Difficulty Filter -->
                    <div class="shop_1_left1 shadow p-3">
                        <h5>FILTER</h5>
                        <hr class="line mb-3">
                        
                        <b class="d-block mb-3">FILTER BY DIFFICULTY</b>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="difficultyAll" checked>
                            <label class="form-check-label" for="difficultyAll">
                                <a href="{{ route('recipes.public') }}">All</a>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="difficultyEasy">
                            <label class="form-check-label" for="difficultyEasy">
                                <a href="#">Easy</a>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="difficultyHard">
                            <label class="form-check-label" for="difficultyHard">
                                <a href="#">Hard</a>
                            </label>
                        </div>
                        
                        <!-- Price Filter -->
                        <b class="d-block mb-3 mt-4">FILTER BY PRICE</b>
                        <input type="range" class="form-range" id="customRange1">
                        <span>Price: <b class="ms-2">Lowest to Highest</b></span>
                    </div>
                    
                    <!-- Category Filter -->
                    <div class="shop_1_left1 shadow p-3 mt-4">
                        <h5>CATEGORY</h5>
                        <hr class="line mb-4">
                        <ul class="mb-0 ms-2">
                            @foreach ($categories as $cat)
                                <li class="border-top pt-3 mt-3">
                                    <a class="justify-content-between d-flex" href="{{ route('recipes.byCategory', $cat->id) }}">
                                        <span><i class="bi bi-arrow-right col_red font_14 me-1"></i> {{ $cat->name }}</span>
                                        <span class="badge bg-secondary">{{ $cat->recipes_count }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Right Content - Products -->
            <div class="col-lg-9 col-md-8">
                <div class="shop_1_right">
                    <!-- Header with results count -->
                    <div class="shop_1_right1 row">
                        <div class="col-md-12">
                            <div class="shop_1_right1_left mt-2">
                                @if(isset($category))
                                    <h4>Category: <span class="col_red">{{ $category->name }}</span></h4>
                                @endif
                                <b><span class="col_red">{{ $recipes->total() }}</span> Recipes Found</b>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Listing - Grid View -->
                    <div class="row shop_1_right2 mt-4">
                        <div class="col-md-12">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                                @foreach($recipes as $recipe)
                                <div class="col">
                                    <div class="card recipe-card h-100 border-0 shadow-sm">
                                        <div class="recipe-img-container">
                                            <img src="{{ asset($recipe->image) }}" alt="{{ $recipe->name }}" class="recipe-img">
                                        </div>
                                        <div class="position-absolute bottom-0 start-0 end-0 text-center p-2 cart-link">
                                            <ul class="mb-0 cart_link">
                                                <li class="d-inline-block">
                                                    <a class="cart-btn" href="/cart">
                                                        <i class="bi bi-bag"></i>
                                                    </a>
                                                </li>
                                                <li class="d-inline-block">
                                                    <a class="view-btn" href="/detail">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="recipe-body">
                                            <h5 class="recipe-title text-center">{{ $recipe->name }}</h5>
                                            <div class="text-center mt-auto">
                                                <span class="recipe-price">${{ number_format($recipe->price, 2) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            
                            <!-- Pagination -->
                            <div class="paging mt-5">
                                {{ $recipes->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection