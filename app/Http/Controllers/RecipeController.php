<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    public function publicIndex()
{
    $recipes = Recipe::with('category')->paginate(9);
    $categories = Category::withCount('recipes')->get();
    
    return view('public.layout.recipe', compact('recipes', 'categories'));
}

public function showByCategory(Category $category)
{
    $recipes = $category->recipes()->paginate(9);
    $categories = Category::withCount('recipes')->get();
    
    return view('public.layout.recipe', compact('recipes', 'categories', 'category'));
}
    

    public function index()
    {
        $recipes = Recipe::all();
        return view('dashboard.recipe.index', compact('recipes'));
    }

 
    public function create()
    {
        $categories = Category::all(); 
        return view('dashboard.recipe.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        $recipe = new Recipe();
        $recipe->name = $request->name;
        $recipe->description = $request->description;
        $recipe->price = $request->price;
        $recipe->category_id = $request->category_id;
    
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/recipes'), $imageName);
            $recipe->image = 'uploads/recipes/' . $imageName;
        }
    
        $recipe->save();
    
        return redirect()->route('recipes.index')->with('success', 'Recipe created successfully!');
    }
    

    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        $categories = Category::all(); 
        return view('dashboard.recipe.edit', compact('recipe', 'categories'));
    }

  
    public function update(Request $request, Recipe $recipe)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        $recipe->name = $request->name;
        $recipe->description = $request->description;
        $recipe->price = $request->price;
        $recipe->category_id = $request->category_id;
    
        if ($request->hasFile('image')) {
          
            if ($recipe->image && file_exists(public_path($recipe->image))) {
                unlink(public_path($recipe->image));
            }
    
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/recipes'), $imageName);
            $recipe->image = 'uploads/recipes/' . $imageName;
        }
    
        $recipe->save();
    
        return redirect()->route('recipes.index')->with('success', 'Recipe updated successfully!');
    }
    


    public function destroy($id)
    {
        $recipe = Recipe::findOrFail($id);


        if ($recipe->image && Storage::exists('public/' . $recipe->image)) {
            Storage::delete('public/' . $recipe->image);
        }

    
        $recipe->delete();

     
        return redirect()->route('recipes.index')->with('success', 'Recipe deleted successfully!');
    }
}
