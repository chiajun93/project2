<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Black T-shirt',
            'title' => 'T-shirt',
            'description' => 'A black t-shirt',
            'price' => 35,
            'category_id' => 1,
            'brand_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'White T-shirt',
            'title' => 'T-shirt',
            'description' => 'A white t-shirt',
            'price' => 64,
            'category_id' => 2,
            'brand_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Yellow T-shirt',
            'title' => 'T-shirt',
            'description' => 'A yellow t-shirt',
            'price' => 13,
            'category_id' => 3,
            'brand_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}