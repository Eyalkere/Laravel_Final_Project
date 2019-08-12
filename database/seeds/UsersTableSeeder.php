<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$BCMS9fDqeqXb3YNaHbvKh.nVgNSoxSVNCW/2Hrcn7wW0hV3CwfwU6',
            'remember_token' => null,
            'created_at'     => '2019-08-12 08:25:01',
            'updated_at'     => '2019-08-12 08:25:01',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
