<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
           ['name'=>'Theatre'],
           ['name'=>'Danse'],
           ['name'=>'Arts du Cirque'],
           ['name'=>'Musique'],
           ['name'=>'Autres'],
        ]);
    }
}
