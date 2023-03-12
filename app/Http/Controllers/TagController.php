<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function getTagsJSON()
    {
        $tags = Tag::all();
        return response()->json($tags);
    }

    public function store(Request $request) {

        $attributes = request()->validate([
            'name' => 'required'
        ]);

        // Generate the slug from the title
        $attributes['slug'] = Str::slug($attributes['name']);

        Tag::create($attributes);

        session()->flash('success','Tag Created Successfully');

        // Redirect to the Admin Dashboard
        return redirect('/admin');
    }

    public function create() {
        return view('admin.tags.create')
        ->with('tag', null);
    }

    public function edit(Tag $tag) {
        return view('admin.tags.create')
        ->with('tag', $tag);
    }


    public function Update(Tag $tag, Request $request) {
        $attributes = request()->validate([
            'name' => 'required'
        ]);

        // Generate the slug from the title
        $attributes['slug'] = Str::slug($attributes['name']);

        $tag->update($attributes);

        session()->flash('success','Tag Updated Successfully');

        // Redirect to the Admin Dashboard
        return redirect('/admin');
    }

    public function destroy(Tag $tag) {
        $tag->delete();

        // Set a flash message
        session()->flash('success','Tag Deleted Successfully');

        // Redirect to the Admin Dashboard
        return redirect('/admin');
    }



}