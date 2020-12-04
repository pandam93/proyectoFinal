<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


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
        factory(App\Classroom::class, 20)->create();

        factory(App\Comment::class, 50)->create();

        DB::table('users')->insert([
            'name' => 'Carlos',
            'email' => 'cfmillanm@gmail.com',
            'password' => Hash::make('password'),
            'classroom_id' => '1',
        ]);

        App\User::where('id', 1)->first()->profile()->save(factory(App\Profile::class)->make());;

        factory(App\User::class, 10)->create()->each(function($user){
            $user->profile()->save(factory(App\Profile::class)->make());
            });

            factory(App\Tag::class, 20)->create();

            factory(App\Article::class, 50)->create()->each(function($article){
            $ids = range(1, 50);
            shuffle($ids);
            $sliced = array_slice($ids, 1, 20);
            $article->tags()->attach($sliced);
            });

            factory(App\Role::class, 3)->create()->each(function($role){
            $ids = range(1, 5);
            shuffle($ids);
            $sliced = array_slice($ids, 1, 20);
            $role->users()->attach($sliced);
            });

            
            factory(App\Message::class, 6)->create()->each(function ($message, $index){
                $enviados = ['Hola','Qué tal','Bien, gracias. Podrías decirme si maniana habrá clases?', 'Gracias, eso era todo','Hola de nuevo! No sé qué poner','Vale, adiós','Muchas gracias!!'];
                $day = Carbon::now();
                $this->body = $enviados[$index];
                $this->created_at = $day->add(1,'day');
            });

            

            

    }
}
