<?php

namespace Database\Seeders;

use App\Models\book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'title' => 'De Gorgels en de laatste kans Jochem Myjer',
                'isbn' => '',
                'author' => 'unknown',
                'edition' => 'unknown'
            ],
            [
                'title' => 'Het schaarse licht Nino Haratischwili',
                'isbn' => '1',
                'author' => 'unknown',
                'edition' => 'unknown'
            ],
            [
                'title' => 'Het lied van ooievaar en dromedaris Anjet Daanje',
                'isbn' => '2',
                'author' => 'unknown',
                'edition' => 'unknown'
            ],
            [
                'title' => 'De diepst verborgen herinnering van de mens Mohamed Mbougar Sarr',
                'isbn' => '3',
                'author' => 'unknown',
                'edition' => 'unknown'
            ],
            [
                'title' => 'Daar waar de rivierkreeften zingen Delia Owens',
                'isbn' => '4',
                'author' => 'unknown',
                'edition' => 'unknown'
            ],
            [
                'title' => 'De jaren Annie Ernaux',
                'isbn' => '5',
                'author' => 'unknown',
                'edition' => 'unknown'
            ]
        ];
        foreach ($books as $book) {
            book::create($book);
        }
    }
}
