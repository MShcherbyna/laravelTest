<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         DB::table('post')->insert(
            [
            'title' => 'Test Post1',
            'desc' => str_random(100)." post1",
            'alias' => 'test1',
            'keywords' => 'test1',
            ]
         );
         DB::table('post')->insert(
            [
            'title' => 'Test Post2',
            'desc' => str_random(100)." post2",
            'alias' => 'test2',
            'keywords' => 'test2',
            ]
         );
         DB::table('post')->insert(
            [
            'title' => 'Test Post3',
            'desc' => str_random(100)." post3",
            'alias' => 'test3',
            'keywords' => 'test3',
            ]
         );
    }
}
