@extends('dashboard.masterpage')

@section('content')
<div class="container">
    <h2>Edit Recipe</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('recipes.update', $recipe->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Recipe Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $recipe->name) }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description', $recipe->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price ($)</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $recipe->price) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Current Image</label><br>
            @if($recipe->image)
                <img src="{{ asset($recipe->image) }}" width="150" class="img-thumbnail mb-2">
            @else
                <p>No image uploaded.</p>
            @endif
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Change Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $recipe->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
