@extends('dashboard.masterpage')

@section('content')
<div class="container">
    <h3>Edit Ingredient</h3>
    <form action="{{ route('ingredient.update', $ingredient->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="ingredient_name" class="form-control" value="{{ $ingredient->ingredient_name }}" required>

        </div>
        <button class="btn btn-dark">Update</button>
    </form>
</div>
@endsection