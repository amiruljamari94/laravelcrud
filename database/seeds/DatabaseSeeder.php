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
        DB::table('users')->truncate();
        DB::table('articles')->truncate();
        // $this->call(UserSeeder::class);

        

        factory('App\User')->times(10)->create();
        factory('App\Article')->times(100)->create();
    }
}
