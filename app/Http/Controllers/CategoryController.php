<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function store(Request $request) {

        $attributes = request()->validate([
            'name' => 'required'
        ]);

        // Generate the slug from the title
        $attributes['slug'] = Str::slug($attributes['name']);

        Category::create($attributes);

        session()->flash('success','Category Created Successfully');

        // Redirect to the Admin Dashboard
        return redirect('/admin');
    }

    public function create() {
        return view('admin.categories.create')
        ->with('category', null);
    }

    public function edit(Category $category) {
        return view('admin.categories.create')
        ->with('category', $category);
    }


    public function Update(Category $category, Request $request) {
        $attributes = request()->validate([
            'name' => 'required'
        ]);

        // Generate the slug from the title
        $attributes['slug'] = Str::slug($attributes['name']);

        $category->update($attributes);

        session()->flash('success','Category Created Successfully');

        // Redirect to the Admin Dashboard
        return redirect('/admin');
    }

    public function destroy(Category $category) {
        $category->delete();

        // Set a flash message
        session()->flash('success','Category Deleted Successfully');

        // Redirect to the Admin Dashboard
        return redirect('/admin');
    }

    public function getCategoriesJSON()
    {
        $categories = Category::all();
        return response()->json($categories);
    }
}
