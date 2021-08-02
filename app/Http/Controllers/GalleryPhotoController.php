<?php

namespace App\Http\Controllers;

use App\Item;
use App\GalleryPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryPhotoController extends Controller
{

  public function create(Item $item)
  {
    return view('backend.item.gallery-create', compact('item'));
  }

  public function store(Request $request, Item $item)
  {
    if ($request->hasFile('photos')) {
      $photos = $request->file('photos');

      foreach ($photos as $photo) {
        $name = time() . '-' . $photo->getClientOriginalName();
        $path = $photo->storeAs('images/gallery/' . $item->id, $name);

        GalleryPhoto::create([
          'photo' => $path,
          'item_id' => $item->id,
        ]);
      }
    }

    return redirect()->route('item.index')->with('success', 'Gallery photos for the item uploaded successfully');
  }

  public function edit(Item $item)
  {
    return view('backend.item.gallery-edit', compact('item'));
  }

  public function update(Request $request, Item $item)
  {
    if ($item->gallery_photos) {
      foreach ($item->gallery_photos as $gallery_photo) {
        Storage::delete($gallery_photo->photo);
        $gallery_photo->delete();
      }
    }

    if ($request->hasFile('photos')) {
      $photos = $request->file('photos');

      foreach ($photos as $photo) {
        $name = time() . '-' . $photo->getClientOriginalName();
        $path = $photo->storeAs('images/gallery/' . $item->id, $name);

        GalleryPhoto::create([
          'photo' => $path,
          'item_id' => $item->id,
        ]);
      }
    }

    return redirect()->route('item.index')->with('success', 'Gallery photos for the item updated successfully');
  }
}
