<?php

use Illuminate\Database\Seeder;

class UserDessertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\UserDessert::class, 6)->create();
    }
}
