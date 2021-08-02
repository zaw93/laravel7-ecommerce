<?php

namespace App\Http\Controllers;

use App\Item;
use App\Brand;
use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Builder;

class PageController extends Controller
{
  /**
   * Return the index page.
   */
  public function index()
  {
    $brands = Brand::all();
    $items = Item::all();
    $new_arrivals = $items->sortByDesc('updated_at')->take(8); // latest updated items  

    $hot_deals = $items->whereNotNull('discount')->random(8); // random discounted items  
    $recommended_items = $items->take(8); // need to change logic 

    return view('frontend.index', [
      'brands' => $brands,
      'new_arrivals' => $new_arrivals,
      'hot_deals' => $hot_deals,
      'recommended_items' => $recommended_items,
    ]);
  }

  /**
   * Return the Each Product page.
   */
  public function show($id)
  {
    $item = Item::find($id);

    // $related_items = $item->subcategory->category->items;

    // $related_items = Item::all()->where('subcategory_id', $item->subcategory_id)->random(5);
    $related_items = Item::all()->random(5);

    return view('frontend.product', [
      'item' => $item,
      'related_items' => $related_items
    ]);
  }

  /**
   * Return the shop page with all products.
   */
  public function shop(Request $request)
  {
    $items = Item::query();

    // Category Filter
    if (!empty($request->query('category'))) {
      $catIds = explode(',', $request->query('category'));
      // $catIds = Category::select('id')->whereIn('id', $ids)->pluck('id');
      $items = $items->whereHas('subcategory.category', function (Builder $query) use ($catIds) {
        $query->whereIn('id', $catIds);
      });
    }

    // Brand Filter
    if (!empty($request->query('brand'))) {
      $bIds = explode(',', $request->query('brand'));

      $items = $items->whereIn('brand_id', $bIds);
    }

    // Price Filter
    if (!empty($request->query('price'))) {
      $price = explode('-', $request->query('price'));

      $items = $items->whereBetween('price', $price);
    }

    // Sort Filter
    if (!empty($request->query('sortBy'))) {
      if ($request->query('sortBy') == 'date_asc') {
        $items = $items->orderBy('created_at', 'asc')->paginate(8);
      }
      if ($request->query('sortBy') == 'date_desc') {
        $items = $items->orderBy('created_at', 'desc')->paginate(8);
      }
      if ($request->query('sortBy') == 'price_asc') {
        $items = $items->orderBy('price', 'asc')->paginate(8);
      }
      if ($request->query('sortBy') == 'price_desc') {
        $items = $items->orderBy('price', 'desc')->paginate(8);
      }
    } else {
      $items = $items->paginate(8); // to paginate above filter results
    }

    $brands = Brand::all();
    $min_price = Item::min('price');
    $max_price = Item::max('price');

    return view('frontend.shop', compact('brands', 'items', 'min_price', 'max_price'));
  }

  /**
   * Redirect to the shop page for query filters.
   */
  public function shopFilter(Request $request)
  {
    $data = $request->all();

    // Category Filter
    $catParams = '';
    if (!empty($data['category'])) {
      foreach ($data['category'] as $category) {
        if (empty($catParams)) {
          $catParams .= '&category=' . $category;
        } else {
          $catParams .= ',' . $category;
        }
      }
    }

    // Brand Filter
    $brandParams = '';
    if (!empty($data['brand'])) {
      foreach ($data['brand'] as $brand) {
        if (empty($brandParams)) {
          $brandParams .= '&brand=' . $brand;
        } else {
          $brandParams .= ',' . $brand;
        }
      }
    }

    // Sort Filter
    $sortParams = '';
    if (!empty($data['sortBy'])) {
      $sortParams .= '&sortBy=' . $data['sortBy'];
    }

    // Price Filter
    $priceParams = '';
    if (!empty($data['price_range'])) {
      $priceParams .= '&price=' . $data['price_range'];
    }

    return redirect()->route('shop', $catParams . $brandParams . $sortParams . $priceParams);
  }

  /**
   * Return the each subcategory page with related products.
   */
  public function collect(Subcategory $subcategory)
  {
    // $items = Item::where('subcategory_id', $subcategory->id)->paginate(8);
    $items = $subcategory->items()->paginate(12);

    $brandIds = $items->pluck('brand_id')->unique();
    $brands = Brand::with('items')->whereIn('id', $brandIds)->get();

    return view('frontend.collection', compact('subcategory', 'items', 'brands'));
  }

  /**
   * Return the Cart page.
   */
  public function cart()
  {
    return view('frontend.cart');
  }

  public function checkout()
  {
    return view('frontend.checkout');
  }

  /**
   * Return the Quickview Popup.
   */
  public function quickView(Item $item)
  {
    return view('frontend.quickview', [
      'item' => $item,
    ]);
  }
}
