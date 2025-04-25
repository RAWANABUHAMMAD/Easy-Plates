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
                    <ul class="list-group mb-4">
                        @forelse($recipe->ingredients as $ingredient)
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3 mb-2 shadow-sm rounded-3">
                                <span>{{ $ingredient->ingredient_name }}</span>
                                <form action="{{ route('recipe_ingredients.destroy', [$recipe->id, $ingredient->id]) }}" method="POST" class="m-0">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger px-3" onclick="return confirm('Remove this ingredient?')">Remove</button>
                                </form>
                            </li>
                        @empty
                            <li class="list-group-item text-muted py-3 rounded-3">No ingredients assigned to this recipe.</li>
                        @endforelse
                    </ul>

                    <!-- Add New Ingredient -->
                    <form action="{{ route('recipe_ingredients.store', $recipe->id) }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="ingredient_id" class="form-label fw-bold mb-2">Add New Ingredient</label>
                            <div class="input-group shadow-sm rounded-3">
                                <span class="input-group-text bg-dark text-white">
                                    <i class="fas fa-carrot"></i>
                                </span>
                                <select name="ingredient_id" id="ingredient_id" class="form-select px-3 py-2 border-start-0 rounded-end">
                                    <option disabled selected>Choose an ingredient...</option>
                                    @foreach($availableIngredients as $ingredient)
                                        <option value="{{ $ingredient->id }}">{{ $ingredient->ingredient_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark px-4 py-2 rounded-pill">+ Add Ingredient</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
