<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Set',
        ]);

        DB::table('categories')->insert([
            'name' => 'Hamburger',
        ]);

        DB::table('categories')->insert([
            'name' => 'Chicken',
        ]);

        DB::table('categories')->insert([
            'name' => 'Rice',
        ]);

        DB::table('categories')->insert([
            'name' => 'Appetizer',
        ]);

        DB::table('categories')->insert([
            'name' => 'Dessert',
        ]);

        DB::table('categories')->insert([
            'name' => 'Drinks',
        ]);

        DB::table('categories')->insert([
            'name' => 'Coffee',
        ]);
    }
}
