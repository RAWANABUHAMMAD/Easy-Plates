<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Ingredient;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{    
    // Helper function to handle image deletion
    protected function deleteImage($image)
    {
        if ($image) {
            $imagePath = str_replace('storage/', '', $image);
            Storage::disk('public')->delete($imagePath);
        }
    }

    // Edit Ingredients for a Recipe
    public function editIngredients($id)
    {
        $recipe = Recipe::findOrFail($id);
        $ingredients = Ingredient::all();
        $selectedIngredients = $recipe->ingredients()->pluck('ingredient_id')->toArray();
    
        return view('dashboard.recipe.ingredients', compact('recipe', 'ingredients', 'selectedIngredients'));
    }
    
    // Update Ingredients for a Recipe
    public function updateIngredients(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);
        $recipe->ingredients()->sync($request->ingredients);
        return redirect()->route('recipes.index')->with('success', 'Ingredients updated successfully.');
    }

    // Public Index for Recipes
    public function publicIndex()
    {
        $recipes = Recipe::with('category')->orderBy('created_at', 'desc')->paginate(9);
        $categories = Category::withCount('recipes')->get();

        return view('public.layout.recipe', compact('recipes', 'categories'));
    }

    // Show Recipes by Category
    public function showByCategory(Category $category)
    {
        $recipes = $category->recipes()->orderBy('created_at', 'desc')->paginate(9);
        $categories = Category::withCount('recipes')->get();

        return view('public.layout.recipe', compact('recipes', 'categories', 'category'));
    }

    // Dashboard Index for Recipes
    public function index()
    {
        $recipes = Recipe::with('category')->orderBy('created_at', 'desc')->get();
        return view('dashboard.recipe.index', compact('recipes'));
    }

    // Create Recipe Form
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.recipe.create', compact('categories'));
    }

    // Store a New Recipe
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        $imagePath = $request->file('image')->store('recipes', 'public');

        Recipe::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => 'storage/' . $imagePath,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('recipes.index')->with('success', 'Recipe created successfully!');
    }

    // Edit Recipe Form
    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        $categories = Category::all();
        
        return view('dashboard.recipe.edit', compact('recipe', 'categories'));
    }

    // Update Recipe
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        $recipe = Recipe::findOrFail($id);
        
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ];

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            $this->deleteImage($recipe->image);
            
            $imagePath = $request->file('image')->store('recipes', 'public');
            $data['image'] = 'storage/' . $imagePath;
        }

        $recipe->update($data);

        return redirect()->route('recipes.index')->with('success', 'Recipe updated successfully!');
    }

    // Delete a Recipe
    public function destroy($id)
    {
        $recipe = Recipe::findOrFail($id);

        // Delete the recipe image
        $this->deleteImage($recipe->image);

        $recipe->delete();

        return redirect()->route('recipes.index')->with('success', 'Recipe deleted successfully!');
    }
}
