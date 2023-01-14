<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->truncate();

        $books = [
                  ['name' => 'PHP Book',
                   'price' => 2000,
                   'author' => 'PHPER'],

                  ];

    }
}
