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
            //$task->expires_at = Carbon\Carbon::now()->subDays(rand(1, 5));
            //$task->save();
        });
    }
}
