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
            'name' => '鈴木孝之',
            'email' => 'test1@test1.com',
            'password' => bcrypt('test'),
        ]);
    }
}
