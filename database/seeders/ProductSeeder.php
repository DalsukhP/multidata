<?php

namespace Database\Seeders;

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
        for($start = 1; $start <= 50; $start++) {
            $data = [
                'name' => \Str::random(30),
                'image' => \Str::random(10),
                'price' => 100,
                'status' => $start >= 40 ? 1 : 0
            ];
            Product::create($data);
        }
    }
}
