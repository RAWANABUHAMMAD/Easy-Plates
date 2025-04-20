@extends('dashboard.masterpage')

@section('content')
<div class="container-fluid py-2">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center px-3">
                        <h6 class="text-white text-capitalize">Recipes Table</h6>
                        <a href="{{ route('recipes.create') }}" class="btn btn-sm btn-light text-dark">+ Add Recipe</a>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($recipes as $recipe)
                                    <tr>
                                        <td class="text-sm">{{ $loop->iteration }}</td>
                                        <td class="text-sm">{{ $recipe->name }}</td>
                                        <td class="text-sm">{{ \Illuminate\Support\Str::limit($recipe->description, 50) }}</td>
                                        <td class="text-sm">${{ number_format($recipe->price, 2) }}</td>
                                        <td class="text-sm">
                                            @if($recipe->image)
                                                <img src="{{ asset($recipe->image) }}" alt="recipe" width="60">
                                            @else
                                                <span class="text-muted">No image</span>
                                            @endif
                                        </td>
                                        <td class="text-sm">{{ $recipe->category->name ?? 'Uncategorized' }}</td>
                                        <td class="text-sm">{{ $recipe->created_at->format('d/m/Y') }}</td>
                                        <td class="text-sm text-center">
                                            <a href="{{ route('recipes.edit', $recipe->id) }}" class="text-info font-weight-bold text-xs me-2">
                                                Edit
                                            </a>
                                            <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-danger font-weight-bold text-xs border-0 bg-transparent" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                @if($recipes->isEmpty())
                                    <tr>
                                        <td colspan="8" class="text-center text-muted">No recipes found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection