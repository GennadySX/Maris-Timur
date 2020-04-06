<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new \App\User();
        $user->fill([
            'name'=> 'Timur Zotov',
            'email'=> 'admin@mail.com',
            'password'=> bcrypt('adminPass'),
        ])->save();

    }
}
