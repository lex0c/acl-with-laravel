<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name'  => 'view_post',
            'label' => 'View a the post.'
        ]);
        
        Permission::create([
            'name'  => 'create_post',
            'label' => 'Create a the post.'
        ]);

        Permission::create([
            'name'  => 'edit_post',
            'label' => 'Edit a the post.'
        ]);

        Permission::create([
            'name'  => 'Delete_post',
            'label' => 'Delete a the post.'
        ]);

    }
}
