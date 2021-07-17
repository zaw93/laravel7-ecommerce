<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $orders = Order::all();

    return view('backend.order.index', compact('orders'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    DB::transaction(function () use ($request) {
      $cart_arr = json_decode($request->data);
      $subtotal = 0;

      foreach ($cart_arr as $item) {
        if ($item->discount) {
          $total = $item->qty * $item->discount;
        } else {
          $total = $item->qty * $item->price;
        }
        $subtotal += $total;
      }

      // insert orders
      $order = new Order;
      $order->orderdate = date('Y-m-d');
      $order->voucherno = time();
      $order->total = $subtotal;
      $order->note = '';
      $order->status = 0;
      $order->user_id = 1;
      $order->save();

      // insert item_order
      foreach ($cart_arr as $item) {
        $order->items()->attach($item->id, ['qty' => $item->qty]);
      }
    });

    return 'success';
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Order  $order
   * @return \Illuminate\Http\Response
   */
  public function show(Order $order)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Order  $order
   * @return \Illuminate\Http\Response
   */
  public function edit(Order $order)
  {
    return view('backend.order.edit', compact('order'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Order  $order
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Order $order)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Order  $order
   * @return \Illuminate\Http\Response
   */
  public function destroy(Order $order)
  {
    //
  }
}
