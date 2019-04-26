<?php

use Illuminate\Database\Seeder;

class UserMakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\UserMakanan::class, 6)->create();
    }
}
