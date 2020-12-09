<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Task::class, 20)->create()->each(function ($task){
            //$task->note()->save(factory(App\Note::class)->make());
        });
    }
}
