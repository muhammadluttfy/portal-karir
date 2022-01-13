<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // $this->authorize('admin');
    return view('dashboard.categories.index', [
      'categories' => Category::all(),
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('dashboard.categories.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required|max:255',
      'slug' => 'required|unique:categories',
    ]);

    // $validatedData['user_id'] = auth()->user_error()->id;
    Category::create($validatedData);

    return redirect('/dashboard/categories')->with('success', 'Post has been deleted!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\category  $category
   * @return \Illuminate\Http\Response
   */
  public function show(category $category)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\category  $category
   * @return \Illuminate\Http\Response
   */
  public function edit(category $category)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\category  $category
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, category $category)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\category  $category
   * @return \Illuminate\Http\Response
   */
  public function destroy(category $category)
  {
    //
  }
}
