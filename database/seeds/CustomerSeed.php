<?php

use Illuminate\Database\Seeder;

class CustomerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $customer = new \App\Customer();
        $customer->fill([
            'customer_id'=>'1',
            'CustomerType'=>'1',
            'CustomerFio'=>'Timur Zotov',
            'CustomerName'=>'TimKuk LLC',
            'CustomerInn'=>'56465465783218',
            'Chief'=>'Chief???',
        ])->save();
    }
}
