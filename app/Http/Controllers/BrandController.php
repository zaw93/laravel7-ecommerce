<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $brands = Brand::all();

    return view('backend.brand.index', ['brands' => $brands]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('backend.brand.create');
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
      'name' => 'required|unique:brands|max:255',
      'photo' => 'required|image|mimes:jpg,jpeg,png,webp|max:1024',
    ]);

    if ($request->file()) {
      $fileName = time() . '-' . $request->photo->getClientOriginalName();

      $path = $request->file('photo')->storeAs('images/brand', $fileName, 'public');
    }

    Brand::create([
      'name' => $request->name,
      'photo' => $path,
    ]);

    return redirect()->route('brand.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Brand  $brand
   * @return \Illuminate\Http\Response
   */
  public function show(Brand $brand)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Brand  $brand
   * @return \Illuminate\Http\Response
   */
  public function edit(Brand $brand)
  {
    return view('backend.brand.edit', ['brand' => $brand]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Brand  $brand
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Brand $brand)
  {
    $request->validate([
      'name' => 'required|max:255',
      'photo' => 'sometimes|image|mimes:jpg,jpeg,png,webp|max:1024',
    ]);

    if ($request->file()) {
      $fileName = time() . '-' . $request->photo->getClientOriginalName();

      $path = $request->file('photo')->storeAs('images/brand', $fileName, 'public');

      Storage::delete($brand->photo);
    } else {
      $path = $brand->photo;
    }

    $brand->name = $request->name;
    $brand->photo = $path;
    $brand->save();

    return redirect()->route('brand.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Brand  $brand
   * @return \Illuminate\Http\Response
   */
  public function destroy(Brand $brand)
  {
    $brand->delete();

    return redirect()->route('brand.index');
  }
}
