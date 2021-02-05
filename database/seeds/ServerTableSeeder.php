<?php

use Illuminate\Database\Seeder;

class ServerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servers')->insert([
            'server_name' => 'Dev',
        ]);
        DB::table('servers')->insert([
            'server_name' => 'Training',
        ]);
        DB::table('servers')->insert([
            'server_name' => 'Live',
        ]);
        DB::table('servers')->insert([
            'server_name' => 'Dev_PHP7',
        ]);
        DB::table('servers')->insert([
            'server_name' => 'Training_PHP7',
        ]);
    }
}
