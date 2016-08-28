<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            ['name'=>'Contrats cession','categories'=>'administrative'],
            ['name'=>'Budget','categories'=>'administrative'],
            ['name'=>'Comunity Management','categories'=>'comunication'],
            ['name'=>'Conseil Image','categories'=>'comunication'],
            ['name'=>'Relation publique','categories'=>'comunication'],
            ['name'=>'Son','categories'=>'materiel'],
            ['name'=>'Lumiere','categories'=>'materiel'],
            ['name'=>'Video','categories'=>'materiel'],
            ['name'=>'Costume','categories'=>'technique'],
            ['name'=>'Maquillage','categories'=>'technique'],
            ['name'=>'Decor','categories'=>'technique'],

        ]);
    }
}
