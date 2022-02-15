<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Công nghệ";
        $category->save();

        $category = new Category();
        $category->name = "Tình yêu";
        $category->save();

        $category = new Category();
        $category->name = "Đời sống";
        $category->save();
    }
}
