<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'name' => 'Land_portal',
            'git_repo_name' => 'land_portal_v2',
            'git_repo_url' => 'https://bitbucket.org/ocplbd/land_portal_v2/src/master/',
        ]);
        DB::table('projects')->insert([
            'name' => 'Mutation',
            'git_repo_name' => 'mutation_v2',
            'git_repo_url' => 'https://bitbucket.org/ocplbd/mutation_v2/src/master/',
        ]);
        DB::table('projects')->insert([
            'name' => 'LISF',
            'git_repo_name' => 'lisf',
            'git_repo_url' => 'https://bitbucket.org/ocplbd/lisf/src/master/',
        ]);
    }
}
