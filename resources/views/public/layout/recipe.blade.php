
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
                    <!-- Price Filter Only -->
                    <div class="shop_1_left1 shadow p-3">
                        <h5>FILTER BY PRICE</h5>
                        <hr class="line mb-3">
                        
                        <b class="d-block mb-3">SORT BY PRICE</b>
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
                                        <!-- الصورة في الأعلى -->
                                        <div class="recipe-img-container">
                                            <img src="{{ asset($recipe->image) }}" alt="{{ $recipe->name }}" class="recipe-img">
                                        </div>
                                        
                                        <div class="card-body p-3">
                                            <!-- الاسم والسعر في نفس السطر -->
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h5 class="recipe-title mb-0">{{ $recipe->name }}</h5>
                                                <span class="recipe-price">JD{{ number_format($recipe->price, 2) }}</span>
                                            </div>
                                            
                                            <!-- الأيقونات أسفلها -->
                                            <div class="text-center">
                                                <ul class="mb-0 cart_link">
                                                    <li class="d-inline-block">
                                                        <a class="cart-btn" href="/cart">
                                                            <i class="bi bi-bag"></i>
                                                        </a>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        <a class="cart-btn" href="{{ route('recipes.details', $recipe->id) }}">
                                                            <i class="bi bi-eye"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            
                            <!-- Pagination -->
                            <div class="paging">
                                <ul class="mb-0 paginate text-center mt-5">
                                    <!-- Previous Page Link -->
                                    <li class="d-inline-block mt-1 mb-1">
                                        <a class="border d-block" href="{{ $recipes->previousPageUrl() }}">
                                            <i class="bi bi-chevron-left"></i>
                                        </a>
                                    </li>
                                    
                                    <!-- Page Number Links -->
                                    @foreach ($recipes->getUrlRange(1, $recipes->lastPage()) as $page => $url)
                                        <li class="d-inline-block mt-1 mb-1">
                                            <a class="border d-block {{ $recipes->currentPage() == $page ? 'active' : '' }}" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                    
                                    <!-- Next Page Link -->
                                    <li class="d-inline-block mt-1 mb-1">
                                        <a class="border d-block" href="{{ $recipes->nextPageUrl() }}">
                                            <i class="bi bi-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection