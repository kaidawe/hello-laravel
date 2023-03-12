<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        $projects = Project::all();
        $users = User::all();
        $categories = Category::all();
        $tags = Tag::all();

        
        return view('admin.index')
        ->with('projects', $projects)
        ->with('users', $users)
        ->with('categories', $categories)
        ->with('tags', $tags);
    }

}
