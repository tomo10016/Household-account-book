<?php

use Illuminate\Database\Seeder;

class CategoryIncomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_incomes')->insert([
          /*
          'id' => '1',
          'name' => '給与・報酬',
          'created_at' => now(),
          'updated_at' => now(),
          */
          
          'id' => '2',
          'name' => '公的年金',
          'created_at' => now(),
          'updated_at' => now(),
          
          /*
          'id' => '3',
          'name' => '私的年金',
          'created_at' => now(),
          'updated_at' => now(),
          */
        ]);
    }
}
