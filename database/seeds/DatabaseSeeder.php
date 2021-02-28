<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(Roleseeder::class);
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 100)->create();
    }
}
