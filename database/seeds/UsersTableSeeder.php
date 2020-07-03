<?php

use Illuminate\Database\Seeder;
use Model\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Hafifi Masod', 'email'=> 'hafifi@kbse.com.my', 'password' => 'hfi1243'],
            ['name' => 'Administrator', 'email'=> 'admin@kotamas.com.my', 'password' => 'K0t@mas1243'],
        ];

        foreach ($users as $u) {
            if (!User::where('email', $u['email'])->first()) {
                $m = new User;
                $m->name = $u['name'];
                $m->email = $u['email'];
                $m->password = bcrypt($u['password']);
                $m->save();
            }
        }
    }
}
