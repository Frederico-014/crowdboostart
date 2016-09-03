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
            ['name'=>'Budget previsionel','categories'=>'administrative'],
            ['name'=>'Charges social','categories'=>'administrative'],
            ['name'=>'Contrat de travail','categories'=>'administrative'],
            ['name'=>'Contrat de cession','categories'=>'administrative'],
            ['name'=>'Contrat de coproduction','categories'=>'administrative'],
            ['name'=>'Correction de textes','categories'=>'comunication'],
            ['name'=>'Traduction de texte','categories'=>'comunication'],
            ['name'=>'Infographie','categories'=>'comunication'],
            ['name'=>'Site Internet','categories'=>'comunication'],
            ['name'=>'Réseaux sociaux','categories'=>'comunication'],
            ['name'=>'Accueil public','categories'=>'relationelle'],
            ['name'=>'Mise en contact professionels','categories'=>'relationelle'],
            ['name'=>'Diffusion evenements','categories'=>'relationelles'],
            ['name'=>'Diffusion campagne de finacement','categories'=>'relationelle'],
            ['name'=>'Scenographie','categories'=>'technique'],
            ['name'=>'Costume','categories'=>'technique'],
            ['name'=>'Lumiere','categories'=>'technique'],
            ['name'=>'Son','categories'=>'technique'],
            ['name'=>'Video','categories'=>'technique'],
            ['name'=>'Photo','categories'=>'technique'],

        ]);
    }
}
