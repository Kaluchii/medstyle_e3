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
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'root',
            'email' => 'admin@medstyle.kz',
            'password' => bcrypt('Med717Yew9m'),
        ]);
    }
}
