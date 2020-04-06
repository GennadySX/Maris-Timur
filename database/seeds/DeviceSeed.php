<?php

use Illuminate\Database\Seeder;

class DeviceSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $device = new \App\Device();
        $device->fill([
            'customer_id'=>'1',
            'Number'=>'+7 (989) 274-14-77',
            'Value'=>'400',
        ])->save();
    }
}
