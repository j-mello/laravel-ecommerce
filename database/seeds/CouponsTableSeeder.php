<?php

use Illuminate\Database\Seeder;
use App\Coupon;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code' => '3WI1',
            'value' => 1
        ]);

        Coupon::create([
            'code' => '42ISTHEANSWER',
            'value' => 3
        ]);

        Coupon::create([
            'code' => 'BRENDAMONTGOMMERY',
            'value' => 2
        ]);
    }
}
