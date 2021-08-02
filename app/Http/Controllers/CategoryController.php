<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $categories = Category::all();

    return view('backend.category.index', ['categories' => $categories]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('backend.category.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|unique:categories|max:255|min:4',
      'photo' => 'required|mimes:jpg,jpeg,png,webp|max:1024',
    ]);

    if ($request->file()) {
      // 683928492-photo.png
      $fileName = time() . '-' . $request->photo->getClientOriginalName();

      // store file under storage/app/public directory
      $path = $request->file('photo')->storeAs('images/category', $fileName, 'public');
    }

    $category = Category::create([
      'name' => $request->name,
      'photo' => $path,
    ]);

    if ($category) {
      return redirect()->route('category.index')->with('success', 'New category created successfully!');
    }
  }



  /**
   * Display the specified resource.
   *
   * @param  \App\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function show(Category $category)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function edit(Category $category)
  {
    return view('backend.category.edit', ['category' => $category]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Category $category)
  {
    $request->validate([
      'name' => 'required|max:255|min:4',
      'photo' => 'sometimes|mimes:jpg,jpeg,png,webp|max:1024',
    ]);

    if ($request->file()) {
      // 683928492-photo.png
      $fileName = time() . '-' . $request->photo->getClientOriginalName();

      // store file under storage/app/public directory
      $path = $request->file('photo')->storeAs('images/category', $fileName, 'public');

      // Delete the old photo 
      Storage::delete($category->photo);
    } else {
      $path = $category->photo;
    }

    $category->name = $request->name;
    $category->photo = $path;
    $category->save();

    return redirect()->route('category.index')->with('success', 'Category updated successfully!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function destroy(Category $category)
  {
    foreach ($category->subcategories as $subcategory) {
      $subcategory->delete();
    }

    $category->delete();

    return back()->with('success', 'Category and its related subcategories deleted successfully');
  }
}
