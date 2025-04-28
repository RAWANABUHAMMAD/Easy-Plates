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
        <div class="row shop_dt1 row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="shop_dt1_left text-center">
                    <!-- صورة الوصفة بحجم 500x500 -->
                    <div class="recipe-image-container mb-4">
                        <img src="{{ asset($recipe->image) }}" 
                             class="recipe-main-image" 
                             alt="{{ $recipe->name }}"
                             width="500"
                             height="500">
                    </div>

                    <!-- السعر مضاف هنا مع الحفاظ على التنسيق الأصلي -->
                    <div class="price-display mb-3">
                        <span class="price-label">Price: </span>
                        <span class="price-value">JD{{ number_format($recipe->price, 2) }}</span>
                    </div>

                    <div class="d-flex align-items-center justify-content-center mt-4">
                        <input type="number" min="1" value="1" class="form-control rounded-0 me-2" placeholder="Qty" style="width:70px; height:45px;">
                        <a class="button me-3" href="/cart">ADD TO CART</a>
                        <span class="text-muted fw-bold" style="font-size: 18px;">الوجبة تكفي لشخصين</span>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="shop_dt1_right">
                    <h1 class="mb-3">{{ $recipe->name }}</h1>

                    <!-- المكونات -->
                    <div class="mt-3">
                        <h4 class="mb-3">Ingredients</h4>
                        <div class="row">
                            @foreach($recipe->ingredients->chunk(ceil($recipe->ingredients->count() / 2)) as $chunk)
                                <div class="col-md-6">
                                    <div class="homeil">
                                        @foreach($chunk as $ingredient)
                                            <h6 class="mb-1">
                                                <i class="bi-check2 me-2" style="color: green;"></i> {{ $ingredient->ingredient_name }}
                                            </h6>
                                            <hr class="mt-1 mb-2">
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- الوصف بدون ترقيم -->
                    <div class="mt-4">
                        <h4 class="mb-3">Description</h4>
                        <p class="font_15 mb-0">
                            {{ $recipe->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- بقية الكود كما هو -->
    </div>
</section>

<style>
    /* تنسيقات الصورة الرئيسية - نفس التنسيق الأصلي */
    .recipe-image-container {
        width: 500px;
        height: 500px;
        margin: 0 auto;
        overflow: hidden;
    }

    .recipe-main-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* تنسيق السعر المضاف فقط */
    .price-display {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
    }

    .price-label {
        color: #666;
    }

    .price-value {
        color: #28a745;
    }

    @media (max-width: 768px) {
        .recipe-image-container {
            width: 100%;
            height: 400px;
        }
    }

    @media (max-width: 576px) {
        .recipe-image-container {
            height: 300px;
        }
        
        .price-display {
            font-size: 1.3rem;
        }
    }
</style>




@endsection
