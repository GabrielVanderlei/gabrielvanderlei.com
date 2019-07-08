<?php

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
        DB::table('users')->insert([
            'name' => 'Gabriel Vanderlei de Oliveira',
            'email' => 'gabrielvanderlei10@hotmail.com',
            'isAdmin' => 1,
            'password' => bcrypt('1234567Po.'),
        ]);
    }
}
