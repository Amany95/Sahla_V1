<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory('App\Blog',100)->create();
        factory('App\client',50)->create();
        factory('App\App_Services',10)->create();
        factory('App\Msg',30)->create();
    }
}
