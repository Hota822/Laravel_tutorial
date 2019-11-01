<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::truncate();
        DB::table('users')->insert([
                'name' =>  'adminuser',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'activation_digest' => 'aaa',
                'email_verified_at' => Carbon::now(),
        ]);                
        $numbers = array(range(1,20));
        for($i = 1; $i < 20; $i++)
        {
            DB::table('users')->insert([
                'name' =>  'testuser'.$i,
                'email' => 'testuser'.$i.'@example.com',
                'password' => bcrypt('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'activation_digest' => 'aaa',
                'email_verified_at' => Carbon::now(),
            ]);
        }
    }
}
