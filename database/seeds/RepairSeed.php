<?php

use Illuminate\Database\Seeder;

class RepairSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $repair = new \App\Repair();
        $repair->fill([
            'customer_id'=>'1',
            'device_id'=>'1',
            //'DateClaim'=>'',
            'NumberClaim'=>'147',
            'Inspector'=>'Андрей Волков',
            //'DateRepair'=>'',
            'Compensation'=>'15',
        ])->save();
    }
}
