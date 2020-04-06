<?php

use Illuminate\Database\Seeder;

class CallSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ring = new \App\Ring();
        $ring->fill([
            'device_id'=>'1',
            'customer_id'=>'1',
            'Number'=>'8 (999) 157-14-18',
            'RingType'=>'1',
            'Country'=>'Россия',
            'Town'=>'Казань',
            'Value'=>'3',
            'Sum'=>'7.5',
            'Comment'=>'Ну я звонил',
        ])->save();
    }
}
