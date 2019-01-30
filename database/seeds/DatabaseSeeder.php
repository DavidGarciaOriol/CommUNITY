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
        factory(App\Community::class, 20)->create();
        //factory(App\Community::class, 50)->create();
        //factory(App\Community::class, 100)->create();

        //$this->call(UsersTableSeeder::class);
        factory(App\User::class, 10)->create();
    }
}
