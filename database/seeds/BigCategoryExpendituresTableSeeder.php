<?php

use Illuminate\Database\Seeder;

class BigCategoryExpendituresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('big_category_expenditures')->insert([
            'id' => 2,
            'name' => '変動費',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
