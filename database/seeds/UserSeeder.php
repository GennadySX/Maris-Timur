<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(\App\User $user)
    {
        //

      factory(\App\User::class, 4)->make();

    }
}
