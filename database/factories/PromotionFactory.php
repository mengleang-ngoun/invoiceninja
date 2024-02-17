<?php

namespace Database\Factories;

use App\Models\Promotion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promotion>
 */
class PromotionFactory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public static function create(): Promotion
    {
        $promotion = new Promotion();
        $promotion->product_id = '';
        $promotion->purchase_amount = 0;
        $promotion->purchase_quantity = 0;
        $promotion->from = '';
        $promotion->offer_product_id = '';
        $promotion->offer_quantity = 0;

        return $promotion;
    }
}
