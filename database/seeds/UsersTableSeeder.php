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
        DB::table('relationships')->delete();
        DB::table('users')->insert([
                'name' =>  'adminuser',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'activation_digest' => 'aaa',
                'email_verified_at' => Carbon::now(),
                'admin' => true,
        ]);
        $user = App\User::find(1);
        $numbers = array(range(1,20));
        print('===========================================');
        for($i = 1; $i < 50; $i++)
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
            $other_user = App\User::find($i+1);
            $user->follow($other_user);
            if ($i < 10) {
                $other_user->follow($user);
            }
        }
    }
}
