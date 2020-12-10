<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = new App\Role();
        $role->name = 'professor';
        $role->description = 'Administrator';
        $role->save();
        
        $role = new App\Role();
        $role->name = 'student';
        $role->description = 'User';
        $role->save();
    }
}
