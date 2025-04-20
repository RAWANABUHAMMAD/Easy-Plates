@extends('dashboard.masterpage')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-gradient-dark text-white d-flex justify-content-between align-items-center">
            Edit Category
            <a href="{{ route('category.index') }}" class="btn btn-sm btn-light text-dark">Back to Categories</a>
        </div>
        <div class="card-body">
            <form action="{{ route('category.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
                </div>
                <button type="submit" class="btn bg-gradient-dark">Update Category</button>
            </form>
        </div>
    </div>
</div>

@endsection
