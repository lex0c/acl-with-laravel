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
            'name'     => 'Léo Castro',
            'email'    => 'leonardo_carvalho@outlook.com',
            'password' => bcrypt('@asd123X')
        ]);

        User::create([
            'name'     => 'Victor Junior',
            'email'    => 'victor11@gmail.com',
            'password' => bcrypt('victor1junior')
        ]);

        User::create([
            'name'     => 'Lucas Silva',
            'email'    => 'silvalucas@gmail.com',
            'password' => bcrypt('silvalucas123')
        ]);

    }
}
