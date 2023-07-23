<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; 

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products=[
            [
                'name'=>'Apple Macbook',
                'details'=>'34 ssd  67 hdd',
                'description'=>'aghjgh45sg fdgd sdsdadada',
                'brand'=>'Apple',
                'price'=>40000,
                'shipping_cost'=>79,
                'image_path'=>'storage/product.png'
            ],

            [
                'name'=>'Samsung OS%',
                'details'=>'12 ssd 45gb hddsadsadasd',
                'description'=>'asdsdadada asdasdsartytiuhgdfh',
                'brand'=>'Samsung',
                'price'=>2000,
                'shipping_cost'=>45,
                'image_path'=>'storage/product2.png'
            ],

        ];

        foreach($products as $key => $value){
            Product::create($value);
        }
    }
}
