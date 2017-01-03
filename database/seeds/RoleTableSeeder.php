<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'  => 'Publisher',
            'label' => 'Publisher of posts.'
        ]);

        Role::create([
            'name'  => 'Admin',
            'label' => 'System administrator.'
        ]);

        Role::create([
            'name'  => 'Manager',
            'label' => 'System manager.'
        ]);
    }
}
