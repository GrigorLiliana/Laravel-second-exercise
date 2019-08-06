<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<11; $i++){
            DB::table('books')->insert([
            'title'=> 'Alice no pais das maravilhas' . $i,
            'author' => Str::random(50)
        ]);
}
    }
}
