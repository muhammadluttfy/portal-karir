<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
  public function index(Post $post, Category $category)
  {
    $title = [];

    if (request('category')) {
      $category = Category::firstWhere('slug', request('category'));
      $title = ' in ' . $category->name;
    }

    if (request('author')) {
      $author = User::firstWhere('username', request('author'));
      $title = ' by ' . $author->name;
    }

    return view('posts', [
      "title" => "All Posts",
      'active' => 'posts',
      "posts" => Post::latest()->filter(request(['search', 'category', 'author']))
        ->paginate(9)->withQueryString(),
      'categories' => Category::all(),
      'post' => $post,
    ]);
  }

  public function show(Post $post)
  {
    return view('post', [
      "title" => "Single Post",
      'active' => 'posts',
      "post" => $post,
      'categories' => Category::all(),
    ]);
  }
}
