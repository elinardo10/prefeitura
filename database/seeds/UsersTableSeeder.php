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
        \DB::table('users')->truncate();

        $u = prefeitura\User::create([
            'name' => 'Elinardo',
            'email' => 'elinardosilva@gmail.com',
            'password' => bcrypt(123456),
        ]);
    }
}
