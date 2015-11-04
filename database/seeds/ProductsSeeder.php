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
            'name' => 'Mini skirt black edition',
            'title' => 'Mini skirt black edition',
            'description' => 'Mini skirt',
            'price' => 35,
            'category_id' => 1,
            'brand_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'T-shirt blue edition',
            'title' => 'T-shirt blue edition',
            'description' => 'T-shirt',
            'price' => 64,
            'category_id' => 2,
            'brand_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Sleeveless Colorblock Scuba',
            'title' => 'Sleeveless Colorblock Scuba',
            'description' => 'Sleeveless',
            'price' => 13,
            'category_id' => 3,
            'brand_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}