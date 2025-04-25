@extends('dashboard.masterpage')

@section('content')
<div class="container-fluid py-2">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 px-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize">Assign Ingredients to Recipe: {{ $recipe->name }}</h6>
                        <a href="{{ route('recipes.index') }}" class="btn btn-sm btn-light text-dark">← Back to Recipes</a>
                    </div>
                </div>
                <div class="card-body px-4 pb-4">
                    <form action="{{ route('recipes.ingredients.update', $recipe->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="ingredients" class="form-label">Select Ingredients</label>
                            <select name="ingredients[]" id="ingredients" class="form-select" multiple size="10">
                                @foreach($ingredients as $ingredient)
                                    <option value="{{ $ingredient->id }}" {{ in_array($ingredient->id, $selectedIngredients) ? 'selected' : '' }}>
                                        {{ $ingredient->ingredient_name }}
                                    </option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Hold Ctrl (or Cmd) to select multiple.</small>
                        </div>

                        <button type="submit" class="btn btn-dark">Save Ingredients</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
