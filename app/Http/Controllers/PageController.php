<?php

namespace App\Http\Controllers;

use App\Item;
use App\Brand;
use App\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    $categories = Category::all();
    $brands = Brand::all();
    $items = Item::all();
    $new_arrivals = $items->sortByDesc('updated_at')->take(8); // latest updated items
    $hot_deals = $items->whereNotNull('discount')->random(8); // random discounted items
    $recommended_items = $items->take(8); // need to change logic 

    return view('frontend.index', [
      'categories' => $categories,
      'brands' => $brands,
      'new_arrivals' => $new_arrivals,
      'hot_deals' => $hot_deals,
      'recommended_items' => $recommended_items,
    ]);
  }

  public function show($id)
  {
    $categories = Category::all();
    $item = Item::find($id);

    $related_items = Item::all()->where('subcategory_id', $item->subcategory_id)->random(5);

    return view('frontend.product', [
      'categories' => $categories,
      'item' => $item,
      'related_items' => $related_items
    ]);
  }

  public function cart()
  {
    $categories = Category::all();

    return view('frontend.cart', [
      'categories' => $categories
    ]);
  }

  public function quickView(Item $item)
  {
    return view('frontend.quickview', [
      'item' => $item,
    ]);
  }

  public function contact()
  {
    return view('template.contact');
  }
}
