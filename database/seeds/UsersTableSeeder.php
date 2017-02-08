<?php

use App\User;
use App\Userrole;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_id = Userrole::where('name', 'Admin')->first()->id;
        User::create([
            'name' => 'Ariana Grande',
            'email' => 'ariana@gmail.com',
            'password' => bcrypt('grande'),
            'userrole_id' => $admin_id
        ]);

    }
}
