<?php

namespace App\Http\Controllers;

use App\Item;
use App\Brand;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $items = Item::all();

    return view('backend.item.index', [
      'items' => $items,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $brands = Brand::all();
    $subcategories = Subcategory::all();

    return view('backend.item.create', [
      'brands' => $brands,
      'subcategories' => $subcategories,
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
      'codeno' => 'required|unique:items,codeno|max:255|min:4',
      'name' => 'required|unique:items,name|max:255|min:4',
      'photo' => 'required|mimes:jpg,jpeg,png,webp|max:1024',
      'unit_price' => 'required|numeric',
      'discount' => 'nullable|numeric',
      'description' => 'required|string',
      'brand_id' => 'required|numeric',
      'subcategory_id' => 'required|numeric',
    ]);

    if ($request->file()) {
      // 683928492-photo.png
      $fileName = time() . '-' . $request->photo->getClientOriginalName();

      // store file under storage/app/public directory
      $path = $request->file('photo')->storeAs('images/item', $fileName);
    }

    Item::create([
      'codeno' => $request->codeno,
      'name' => $request->name,
      'photo' => $path,
      'price' => $request->unit_price,
      'discount' => $request->discount,
      'description' => $request->description,
      'brand_id' => $request->brand_id,
      'subcategory_id' => $request->subcategory_id,
    ]);

    return redirect()->route('item.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Item  $item
   * @return \Illuminate\Http\Response
   */
  public function show(Item $item)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Item  $item
   * @return \Illuminate\Http\Response
   */
  public function edit(Item $item)
  {
    $brands = Brand::all();
    $subcategories = Subcategory::all();

    return view('backend.item.edit', [
      'item' => $item,
      'brands' => $brands,
      'subcategories' => $subcategories,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Item  $item
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Item $item)
  {
    $request->validate([
      'codeno' => 'required|unique:items,codeno,' . $item->id . '|max:255|min:4',
      'name' => 'required|unique:items,name,' . $item->id . '|max:255|min:4',
      'photo' => 'sometimes|mimes:jpg,jpeg,png,webp|max:1024',
      'unit_price' => 'required|numeric',
      'discount' => 'nullable|numeric',
      'description' => 'required|string',
      'brand_id' => 'required|numeric',
      'subcategory_id' => 'required|numeric',
    ]);

    if ($request->file()) {
      // 683928492-photo.png
      $fileName = time() . '-' . $request->photo->getClientOriginalName();

      // store file under storage/app/public directory
      $path = $request->file('photo')->storeAs('images/item', $fileName);

      // Delete the old photo
      Storage::delete($item->photo);
    } else {
      $path = $item->photo;
    }

    $item->codeno = $request->codeno;
    $item->name = $request->name;
    $item->photo = $path;
    $item->price = $request->unit_price;
    $item->discount = $request->discount;
    $item->description = $request->description;
    $item->brand_id = $request->brand_id;
    $item->subcategory_id = $request->subcategory_id;

    $item->save();

    return redirect()->route('item.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Item  $item
   * @return \Illuminate\Http\Response
   */
  public function destroy(Item $item)
  {
    $item->delete();

    return redirect()->route('item.index');
  }
}
