<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'ไก่ต้มนํ้าปลา',
            'cost' => 70,
            'price' => 100,
            'qty' => 10,
            'image_url' => 'https://www.wongnai.com/recipes/ugc/e953ab2968924127bddc54e8ad476c21',
            'product_type_id' => 4, ],
            [ 'name' => 'ช็อกโกแลต',
            'cost' => 500,
            'price' => 1000,
            'qty' => 5,
            'image_url' => 'https://www.mushroomtravel.com/page/souvenirs-dubai/',
            'product_type_id' => 8,],
        ];
            DB::table('products')->insert($data);
    }
}
