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
