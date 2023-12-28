<?php

namespace App\Http\Controllers;

use App\Models\ProductBoking;
use App\Models\Cart;

use Illuminate\Http\Request;

class ProductBokingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $cart_id= $request->cart_id;

          $data= array();

          foreach ($cart_id as $i=>$value){
            $cart = Cart::find($value);
            $data[$i]['user_id'] = $cart->user_id;
            $data[$i]['product_id'] = $cart->product_id;
            $data[$i]['quantity'] = $cart->quantity;
            $data[$i]['payment_status'] = '0';

          }
          $productBoking= ProductBoking::insert($data);
          if($productBoking){
            Cart::destroy($cart_id);
          }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductBoking $productBoking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductBoking $productBoking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductBoking $productBoking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductBoking $productBoking)
    {
        //
    }
}
