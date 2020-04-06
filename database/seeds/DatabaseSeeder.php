<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(UserSeed::class);
        $this->call(CustomerSeed::class);
        $this->call(RepairSeed::class);
        $this->call(CallSeed::class);
        $this->call(ReceiptSeed::class);
    }
}
