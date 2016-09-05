<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'title'=>'Arat',
            'abstract'=>'Art nous invite à realiser un voyage singulier et magique',
            'image'=>'Aratflamencos.jpg',
            'user_id'=>6,
            'category_id'=>2,
        ]);

        DB::table('events')->insert([
            'title'=>'Scizo mais pas trop',
            'abstract'=>'Tishou Amina Kane nous emène vers ces être à part, ceux qui font peur, qu on isole ...',
            'image'=>'Scizomaispastrop.jpg',
            'user_id'=>2,
            'category_id'=>2,
        ]);

        DB::table('events')->insert([
            'title'=>'Chambre 432',
            'abstract'=>'Tishou Amina Kane nous emène vers ces être à part ...',
            'image'=>'chambre432.jpg',
            'user_id'=>2,
            'category_id'=>2,
        ]);

        DB::table('events')->insert([
            'title'=>'Quatier kaleidoscope',
            'abstract'=>'Tishou Amina Kane nous emène vers ces être à part ...',
            'image'=>'quatierkaleidoscope.jpg',
            'user_id'=>5,
            'category_id'=>1,
        ]);

        DB::table('events')->insert([
            'title'=>'Les Swing o Pattes',
            'abstract'=>'Spectacle décambulatoire, festif humoristique emmené par des jongleurs',
            'image'=>'lesswingopattes.jpg',
            'user_id'=>3,
            'category_id'=>3,
        ]);

        DB::table('events')->insert([
            'title'=>'Révélation',
            'abstract'=>'Tishou Amina Kane loffensive',
            'image'=>'revelation.jpg',
            'user_id'=>2,
            'category_id'=>2,
        ]);




        $uploads=public_path(env('UPLOADS'));
        $files=File::allFiles($uploads);

        foreach($files as $file)
        {
            File::delete($file);
        }

        factory(App\Event::class,10)->create()->each(function ($event) use($uploads)
        {
            $tagsId=[1,2,3];
            shuffle($tagsId);
            $event->tags()->attach([$tagsId[0],$tagsId[1]]);

            $event->image=$uri= str_random(12).'.jpg';
            $event->save();

            $fileName=file_get_contents('http://lorempicsum.com/futurama/350/200/'.rand(1,9));

            File::put($uploads.DIRECTORY_SEPARATOR.$uri,$fileName);


        });
    }
}
