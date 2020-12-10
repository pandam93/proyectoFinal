<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                        // Populate roles
                        $role1 = new App\Role();
                        $role1->name = 'professor';
                        $role1->description = 'Administrator';
                        $role1->save();
                        
                        $role2 = new App\Role();
                        $role2->name = 'student';
                        $role2->description = 'User';
                        $role2->save();

                // Populate users
                factory(App\User::class, 50)->create();

                // Get all the roles attaching up to 3 random roles to each user
                $roles = App\Role::all();

                // Populate the pivot table
                App\User::all()->each(function ($user) use ($roles) { 
                    (rand(0,1)) 
                    ? 
                    $user->profile()->save(factory(App\Profile::class)->make())
                    :
                    $user->profile()->save(factory(App\Profile::class)->state('female')->make());

                    $user->roles()->attach(
                        $roles->random(rand(1, 2))->pluck('id')->toArray()
                    ); 
                });

    }
}
