<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //$this->truncateTables(['users','classroom',]);


        //$this->call(UsersTableSeeder::class);
        $this->call(ClassroomsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(NotesTableSeeder::class);
    }

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
