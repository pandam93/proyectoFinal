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
        factory(App\User::class, 13)->create()->each(function ($student){
                (rand(0,1)) ? 
                $student->profile()->save(factory(App\Profile::class)->make())
                :
                $student->profile()->save(factory(App\Profile::class)->state('female')->make());
        });
    }
}
