<?php

use Illuminate\Database\Seeder;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutions')->insert([
            'name'=>'Institution 1',
            'email'=>'instituion1@instituions.fr',
        ]);

        DB::table('institutions')->insert([
            'name'=>'Institution 2',
            'email'=>'instituion2@instituions.fr',
        ]);

        DB::table('institutions')->insert([
            'name'=>'Institution 3',
            'email'=>'instituion3@instituions.fr',
        ]);
    }
}
