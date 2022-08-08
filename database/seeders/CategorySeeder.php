<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('primary_categories')->insert([
                [
                    'name'=> 'フルーツ・果物',
                    'sort_order' => 1,
                ],
                [
                    'name'=> '魚介類・水産加工品',
                    'sort_order' => 2,
                ],
                [
                    'name'=> '野菜・きのこ',
                    'sort_order' => 3,
                ],
            ]);
            DB::table('secondary_categories')->insert([
                [
                    'name'=> 'いちご',
                    'sort_order' => 1,
                    'primary_category_id' => 1,
                ],
                [
                    'name'=> 'もも',
                    'sort_order' => 2,
                    'primary_category_id' => 1,
                ],
                [
                    'name'=> 'メロン',
                    'sort_order' => 3,
                    'primary_category_id' => 1,
                ],
                [
                    'name'=> 'マグロ',
                    'sort_order' => 4,
                    'primary_category_id' => 2,
                ],
                [
                    'name'=> '貝類',
                    'sort_order' => 5,
                    'primary_category_id' => 2,
                ],
                [
                    'name'=> 'カニ',
                    'sort_order' => 6,
                    'primary_category_id' => 2,
                ],
                [
                    'name'=> 'セット・詰め合わせ',
                    'sort_order' => 7,
                    'primary_category_id' => 3,
                ],
                [
                    'name'=> 'カット野菜',
                    'sort_order' => 8,
                    'primary_category_id' => 3,
                ],
                [
                    'name'=> '豆類',
                    'sort_order' => 9,
                    'primary_category_id' => 3,
                ],
            ]);
        
    }
}
