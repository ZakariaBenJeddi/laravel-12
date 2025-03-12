<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table("products")->insert([
        //     "name"=>"Pepsi",
        //     "label"=>"1L - Pepsi",
        //     "price"=>30.5,
        // ]);
        Product::factory(10)->create();
    }
}
