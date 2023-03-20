<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products_arr = [["name" => "Flower", "desc" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,", "price" => "20"],
        ["name" => "pot", "desc" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it", "price" => "30"]];
        foreach($products_arr as $product){
            $new_product = new Product();
            $new_product->product_name  = $product["name"];
            $new_product->description = $product["desc"];
            $new_product->product_price = $product["price"];
            $new_product->save();
        }
    }
}
