<?php
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        DB::unprepared('ALTER TABLE users AUTO_INCREMENT=1');
        DB::table('users')->insert(
            [
                [
                    'username' => 'Antoine',
                    'email' => 'antoine.lucsko@wanadoo.fr',
                    'password' => Hash::make('Antoine'),
                ],
                [
                    'username' => 'Guillaume',
                    'email' => 'guillaume-perot@hotmail.fr',
                    'password' => Hash::make('Guillaume'),
                ]
            ]);
    }

}
