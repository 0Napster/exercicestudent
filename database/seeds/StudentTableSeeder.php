<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StudentTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('students')->delete();
        DB::unprepared('ALTER TABLE students AUTO_INCREMENT=1');
        DB::table('students')->insert(
            [
                [
                    'name' => 'Guillaume',
                    'firstname' => 'Perot',
                    'role' => 'développement',
                    'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum blandit lectus euismod lorem facilisis, posuere euismod enim rutrum.',
                    'password' => Hash::make('Antoine'),
                ],
                [
                    'name' => 'Antoine',
                    'firstname' => 'Morisset',
                    'role' => 'développement',
                    'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum blandit lectus euismod lorem facilisis, posuere euismod enim rutrum.',
                    'password' => Hash::make('Guillaume'),
                ],
                [
                    'name' => 'William',
                    'firstname' => 'Perot',
                    'role' => 'graphisme',
                    'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum blandit lectus euismod lorem facilisis, posuere euismod enim rutrum.',
                    'password' => Hash::make('William'),
                ],
                [
                    'name' => 'Arthur',
                    'firstname' => 'Auneau',
                    'role' => 'graphisme',
                    'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum blandit lectus euismod lorem facilisis, posuere euismod enim rutrum.',
                    'password' => Hash::make('Arthur'),
                ],
                [
                    'name' => 'Juliette',
                    'firstname' => 'Dasneves',
                    'role' => 'journalisme',
                    'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum blandit lectus euismod lorem facilisis, posuere euismod enim rutrum.',
                    'password' => Hash::make('Juliette'),
                ]
            ]);
    }

}

