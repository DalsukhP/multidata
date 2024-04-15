<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Electronics', 'status' => '0'],
            ['name' => 'Garments', 'status' => '0'],
            ['name' => 'Kids', 'status' => '0'],
            ['name' => 'Other', 'status' => '0'],
            ['name' => 'Mens', 'status' => '0'],
            ['name' => 'Womens', 'status' => '0'],
            ['name' => 'Sports', 'status' => '0'],
            ['name' => 'Mahicnes', 'status' => '1'],
            ['name' => 'Test', 'status' => '1'],
            ['name' => 'Category', 'status' => '1'],
        ];
        foreach ($data as $row) {
            Category::create($row);
        }
    }
}
