<?php

use Illuminate\Database\Seeder;

class ReceiptSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $receipt = new \App\Receipt();
        $receipt->fill([
            'customer_id'=>'1',
            'device_id'=>'1',
            'MapPhone'=>'754-77',
            //'DateMap'=>'',
            'MapCount'=>'400',
            'Account'=>'1477879878321',
            'Bank'=>'Central Bank of Russia',
            'PhoneAddress'=>'Казань',
            'Value'=>'400',
            'ExemptType'=>'40',
            'Exempt'=>'110',
        ])->save();
    }
}
