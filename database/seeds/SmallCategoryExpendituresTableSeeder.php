<?php

use Illuminate\Database\Seeder;
use App\SmallCategory_expenditure;

class SmallCategoryExpendituresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         SmallCategory_expenditure::create([
            'id' => 3,
            'name' => '通信費',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        SmallCategory_expenditure::create([
            'id' => 4,
            'name' => '保険料',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        SmallCategory_expenditure::create([
            'id' => 5,
            'name' => '食費',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        SmallCategory_expenditure::create([
            'id' => 6,
            'name' => '日用品費',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        SmallCategory_expenditure::create([
            'id' => 7,
            'name' => '被服費',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        SmallCategory_expenditure::create([
            'id' => 8,
            'name' => '美容費',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        SmallCategory_expenditure::create([
            'id' => 9,
            'name' => '交際費',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        SmallCategory_expenditure::create([
            'id' => 10,
            'name' => '趣味費',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        SmallCategory_expenditure::create([
            'id' => 11,
            'name' => '交通費',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        SmallCategory_expenditure::create([
            'id' => 12,
            'name' => '教育費',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        SmallCategory_expenditure::create([
            'id' => 13,
            'name' => '医療費',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        SmallCategory_expenditure::create([
            'id' => 14,
            'name' => '特別費',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        SmallCategory_expenditure::create([
            'id' => 15,
            'name' => '雑費',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
