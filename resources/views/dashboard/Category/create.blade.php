@extends('dashboard.masterpage')

@section('content')

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-gradient-dark text-white">
            Add New Category
        </div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <button type="submit" class="btn bg-gradient-dark">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection