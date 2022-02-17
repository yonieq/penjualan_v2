<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = 
            [
                'name' => 'Ayam Potong',
            ];
        Category::insert($data);

        $data2 = 
            [
                'name' => 'Ayam Hidup',
            ];
        Category::insert($data2);
    }
}
