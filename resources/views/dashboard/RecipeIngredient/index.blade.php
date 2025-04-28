@extends('dashboard.masterpage')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 px-3 d-flex justify-content-between align-items-center">
                    <h6 class="text-white mb-0">Ingredients for: {{ $recipe->name }}</h6>
                    <a href="{{ route('recipes.index') }}" class="btn btn-sm btn-light text-dark">← Back to Recipes</a>
                </div>
                <div class="card-body px-4 pb-4">

                    <!-- Current Ingredients -->
                    <h6 class="mb-3 fw-bold">Current Ingredients:</h6>
                    
                    @if($recipe->ingredients->isEmpty())
                        <div class="alert alert-info rounded-3">
                            No ingredients assigned to this recipe.
                        </div>
                    @else
                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 mb-4">
                            @foreach($recipe->ingredients as $ingredient)
                                <div class="col">
                                    <div class="card h-100 shadow-sm border-0 rounded-3">
                                        <div class="card-body p-3 d-flex flex-column">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <span class="fw-bold">{{ $ingredient->ingredient_name }}</span>
                                                <form action="{{ route('recipe_ingredients.destroy', [$recipe->id, $ingredient->id]) }}" method="POST" class="m-0">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger p-1" onclick="return confirm('Remove this ingredient?')">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Add New Ingredients -->
                    <form action="{{ route('recipe_ingredients.store', $recipe->id) }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="ingredient_id" class="form-label fw-bold mb-2">Add New Ingredients</label>
                            <div class="row g-3 align-items-center">
                                <div class="col-md-8">
                                    <select name="ingredient_id[]" id="ingredient_id" class="form-select" multiple style="height: auto; min-height: 120px;">
                                        @foreach($availableIngredients as $ingredient)
                                            <option value="{{ $ingredient->id }}">{{ $ingredient->ingredient_name }}</option>
                                        @endforeach
                                    </select>
                                    <small class="text-muted">Hold Ctrl/Cmd to select multiple ingredients</small>
                                </div>
                                <div class="col-md-4 d-flex align-items-end">
                                    <button type="submit" class="btn btn-dark w-100 py-2">
                                        <i class="fas fa-plus me-2"></i> Add Selected
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
