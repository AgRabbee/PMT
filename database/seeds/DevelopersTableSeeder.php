<?php

use Illuminate\Database\Seeder;

class DevelopersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('developers')->insert([
            'name' => 'Zaman',
            'email' => 'zaman@batworld.com',
        ]);
        DB::table('developers')->insert([
            'name' => 'Rabbee',
            'email' => 'rabbee@batworld.com',
        ]);
        DB::table('developers')->insert([
            'name' => 'Rakib',
            'email' => 'rakib@batworld.com',
        ]);
        DB::table('developers')->insert([
            'name' => 'Tanzim',
            'email' => 'tanzim@batworld.com',
        ]);
    }
}
