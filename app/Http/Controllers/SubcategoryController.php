<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $subcategories = Subcategory::all();

    return view('backend.subcategory.index', ['subcategories' => $subcategories]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $categories = Category::all();

    return view('backend.subcategory.create', [
      'categories' => $categories
    ]);
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
      'name' => 'required|unique:subcategories,name|max:255|min:4',
      'category_id' => 'required|numeric',
    ]);

    Subcategory::create([
      'name' => $request->name,
      'category_id' => $request->category_id,
    ]);

    return redirect()->route('subcategory.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Subcategory  $subcategory
   * @return \Illuminate\Http\Response
   */
  public function show(Subcategory $subcategory)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Subcategory  $subcategory
   * @return \Illuminate\Http\Response
   */
  public function edit(Subcategory $subcategory)
  {
    $categories = Category::all();

    return view('backend.subcategory.edit', [
      'categories' => $categories,
      'subcategory' => $subcategory,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Subcategory  $subcategory
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Subcategory $subcategory)
  {
    $request->validate([
      'name' => 'required|max:255|min:4',
      'category_id' => 'required|numeric'
    ]);

    $subcategory->name = $request->name;
    $subcategory->category_id = $request->category_id;
    $subcategory->save();

    return redirect()->route('subcategory.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Subcategory  $subcategory
   * @return \Illuminate\Http\Response
   */
  public function destroy(Subcategory $subcategory)
  {
    $subcategory->delete();

    return redirect()->route('subcategory.index');
  }
}
