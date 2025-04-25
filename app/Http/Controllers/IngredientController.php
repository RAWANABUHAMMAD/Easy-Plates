<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::latest()->get();
        return view('dashboard.ingredients.index', compact('ingredients'));
    }

    public function create()
    {
        return view('dashboard.ingredients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ingredient_name' => 'required|string|max:255'
        ]);

        Ingredient::create($request->only('ingredient_name'));

        return redirect()->route('ingredient.index')->with('success', 'Ingredient added successfully.');
    }

    public function edit(Ingredient $ingredient)
    {
        return view('dashboard.ingredients.edit', compact('ingredient'));
    }

    public function update(Request $request, Ingredient $ingredient)
{
    // التحقق من صحة البيانات
    $request->validate([
        'ingredient_name' => 'required|string|max:255'
    ]);

    // تحديث قيمة "اسم المكون" في الـ database
    $ingredient->update([
        'ingredient_name' => $request->ingredient_name
    ]);

    // إعادة التوجيه مع رسالة نجاح
    return redirect()->route('ingredient.index')->with('success', 'Ingredient updated successfully.');
}

    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();

        return redirect()->route('ingredient.index')->with('success', 'Ingredient deleted successfully.');
    }
}
