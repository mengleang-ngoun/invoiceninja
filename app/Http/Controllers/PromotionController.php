<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Utils\Traits\MakesHash;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    use MakesHash;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promotions = Promotion::all();
        foreach($promotions as &$promotion){
            $promotion['product_id'] = $this->encodePrimaryKey($promotion->product_id);
            $promotion['offer_product_id'] = $this->encodePrimaryKey($promotion->offer_product_id);
        }
        return $promotions;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $promotion = new Promotion();

        $promotion->product_id = $this->decodePrimaryKey($request->product_id);
        $promotion->offer_product_id = $this->decodePrimaryKey($request->offer_product_id);
        $promotion->purchase_amount = $request->purchase_amount;
        $promotion->purchase_quantity = $request->purchase_quantity;
        $promotion->from = $request->from;
        $promotion->offer_quantity = $request->offer_quantity;

        $promotion->save();

        $promotion->product_id = $this->encodePrimaryKey($promotion->product_id);
        $promotion->offer_product_id = $this->encodePrimaryKey($promotion->offer_product_id);

        return $promotion;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $promotion = Promotion::find($request->id);

        $promotion->product_id = $this->decodePrimaryKey($request->product_id);
        $promotion->offer_product_id = $this->decodePrimaryKey($request->offer_product_id);
        $promotion->purchase_amount = $request->purchase_amount;
        $promotion->purchase_quantity = $request->purchase_quantity;
        $promotion->from = $request->from;
        $promotion->offer_quantity = $request->offer_quantity;

        $promotion->save();

        $promotion->product_id = $this->encodePrimaryKey($promotion->product_id);
        $promotion->offer_product_id = $this->encodePrimaryKey($promotion->offer_product_id);


        return $promotion;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $promotion = Promotion::find($request->id);
        if ($promotion) {
            $promotion->delete();
        }
        return $promotion;
    }
}
