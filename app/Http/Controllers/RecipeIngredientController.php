<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class RecipeIngredientController extends Controller
{
    /**
     * Show ingredients for a recipe.
     */
    public function index(Recipe $recipe)
    {
        // جلب جميع المكونات غير المرتبطة حالياً بالوصفة
        $availableIngredients = Ingredient::whereNotIn('id', $recipe->ingredients->pluck('id'))->get();

        return view('dashboard.RecipeIngredient.index', compact('recipe', 'availableIngredients'));
    }

    /**
     * Add an ingredient to the recipe.
     */
    public function store(Request $request, Recipe $recipe)
    {
        $request->validate([
            'ingredient_id' => 'required|exists:ingredients,id',
        ]);

        // ربط المكون بالوصفة بدون تكرار
        if (!$recipe->ingredients->contains($request->ingredient_id)) {
            $recipe->ingredients()->attach($request->ingredient_id);
        }

        return redirect()->route('recipe_ingredients.index', $recipe->id)->with('success', 'Ingredient added successfully.');
    }

    /**
     * Remove an ingredient from the recipe.
     */
    public function destroy(Recipe $recipe, Ingredient $ingredient)
    {
        $recipe->ingredients()->detach($ingredient->id);

        return redirect()->route('recipe_ingredients.index', $recipe->id)->with('success', 'Ingredient removed.');
    }
}
