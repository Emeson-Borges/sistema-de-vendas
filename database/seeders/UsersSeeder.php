<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ação que vai fazer
        User::create([
            'firstName' => 'Emeson',
            'lastName' => 'Borges',
            'email' => 'borges@admin.com',
            'password' => bcrypt('admin'),
            //'is_admin' => true,
            //'is_super_admin' => false,
        ]);
    }
}
