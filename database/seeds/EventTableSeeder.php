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
