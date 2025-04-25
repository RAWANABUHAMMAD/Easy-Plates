@extends('dashboard.masterpage')

@section('content')
<div class="container">
    <h3>Add Ingredient</h3>
    <form action="{{ route('ingredient.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="ingredient_name" class="form-control" required>

        </div>
        <button class="btn btn-dark">Add</button>
    </form>
</div>
@endsection