<?php

use Illuminate\Database\Seeder;
use App\PaymentMethod;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::create([
            'id' => 1,
            'name' => '現金',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        PaymentMethod::create([
            'id' => 2,
            'name' => 'クレジットカード',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        PaymentMethod::create([
            'id' => 3,
            'name' => 'スマホ決済',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
