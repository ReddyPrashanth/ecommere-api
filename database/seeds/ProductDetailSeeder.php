<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductDetail;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $colors = array('red','blue','green');
        $sizes = array('S','M','L');
        $products->each(function($val, $key) use ($colors, $sizes){
            for($i=0; $i<3; $i++){
                ProductDetail::create([
                    'color' => $colors[$i],
                    'size' => $sizes[$i],
                    'quantity' => rand(1, 5),
                    'product_id' => $val->id
                ]);
            }
        });
    }
}
