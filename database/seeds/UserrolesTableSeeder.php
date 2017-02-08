<?php

use App\Userrole;
use Illuminate\Database\Seeder;

class UserrolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Userrole::create(['name' => 'Admin']);
        Userrole::create(['name' => 'User']);
    }
}
