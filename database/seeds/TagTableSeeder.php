<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ['name'=>'tag1'],
            ['name'=>'tag2'],
            ['name'=>'tags3'],
        ]);
    }
}
