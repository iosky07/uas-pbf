<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Admin',
          'email' => 'admin@gmail.com',
          'role'=> '1',
          'password' => bcrypt('katasandi'),
      ]);
      DB::table('users')->insert([
          'name' => 'User1',
          'email' => 'user1@gmail.com',
          'role'=>'2',
          'password' => bcrypt('katasandi'),
      ]);
      DB::table('users')->insert([
          'name' => 'User2',
          'email' => 'user2@gmail.com',
          'role'=>'2',
          'password' => bcrypt('katasandi'),
      ]);
    }
  }
