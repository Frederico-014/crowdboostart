<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'surname'=>'Mr',
            'firstname'=>'Robot',
            'username'=>'Good',
            'email'=>'admin@admin.fr',
            'password'=>Hash::make('admin'),
            'right'=>'admin',
        ]);

        DB::table('users')->insert([
            'surname'=>'Mr',
            'firstname'=>'user1',
            'username'=>'Cie A Part Etre',
            'email'=>'user1@user1.fr',
            'password'=>Hash::make('user1'),
            'right'=>'visitor',
        ]);

        DB::table('users')->insert([
            'surname'=>'Mr',
            'firstname'=>'user2',
            'username'=>'Cie Alors là',
            'email'=>'user2@user2.fr',
            'password'=>Hash::make('user2'),
            'right'=>'visitor',
        ]);

        DB::table('users')->insert([
            'surname'=>'Mr',
            'firstname'=>'user3',
            'username'=>'Cie A Part Etre',
            'email'=>'user3@user3.fr',
            'password'=>Hash::make('user3'),
            'right'=>'visitor',
        ]);

        DB::table('users')->insert([
            'surname'=>'Callegos',
            'firstname'=>'Carlos',
            'username'=>'Carlos Callegos',
            'email'=>'user4@user4.fr',
            'password'=>Hash::make('user4'),
            'right'=>'visitor',
        ]);

        DB::table('users')->insert([
            'surname'=>'Mr',
            'firstname'=>'User5',
            'username'=>'Arta Flamenco',
            'email'=>'user5@user5.fr',
            'password'=>Hash::make('user5'),
            'right'=>'visitor',
        ]);


        DB::table('users')->insert([
            'surname'=>'Martigues',
            'firstname'=>'Jonatahan',
            'username'=>'Booster',
            'email'=>'booster@booster.fr',
            'password'=>Hash::make('booster'),
            'right'=>'visitor',
        ]);

        DB::table('users')->insert([
            'surname'=>'Angelo',
            'firstname'=>'Maya',
            'username'=>'creator',
            'email'=>'creator@creator.fr',
            'password'=>Hash::make('creator'),
            'right'=>'visitor',
        ]);
    }
}
