<?php

use Illuminate\Database\Seeder;

class AretikelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            'title' => Str::random(3),
            'subject' => Str::random(3),
        ]);

    }
}
