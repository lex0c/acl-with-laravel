<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Léo Castro',
            'email' => 'leonardo_carvalho@outlook.com',
            'password' => bcrypt('@oiee1')
        ]);
    }
}
