<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class MicropostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('microposts')->delete();
        $numbers = array(range(1,20));
        $date = Carbon::now();
        for($i = 1; $i < 20; $i++) {
            DB::table('microposts')->insert([
                'content' =>  'test'.$i,
                'user_id' => 1,
                'created_at' => $date->addHour(-$i),
                'updated_at' => $date->addHour(-$i),
                'picture' => '',                
            ]);
            DB::table('microposts')->insert([
                'content' => 'feed'.$i,
                'user_id' => $i,
                'created_at' => $date->addHour(-$i),
                'updated_at' => $date->addHour(-$i),
                'picture' => '',
            ]);
            
        }
    }
}
