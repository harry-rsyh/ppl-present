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
        // $this->call(UsersTableSeeder::class);
        // $this->call(UserMakananSeeder::class);
        // $this->call(UserMinumanSeeder::class);
        // $this->call([
        //     UserMakananSeeder::class,
        //     UserDessertSeeder::class,
        //     UserMinumanSeeder::class,
        //     UserAccountSeeder::class
        // ]);
        $this->call(UserAccountSeeder::class);
    }
}
