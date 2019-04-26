<?php

use Illuminate\Database\Seeder;

class UserMinumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\UserMinuman::class, 6)->create();
    }
}
