<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dater;

class DaterSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $daters = [
            ['name' => 'Mils', 'age' => 25, 'bio' => 'Totally epic dood', 'image' => 'Mils.png', 'messages' => ''],
            ['name' => 'Theo', 'age' => 87, 'bio' => 'I never give up (gambling)', 'image' => 'Theo.png', 'messages' => ''],
            ['name' => 'Sammy', 'age' => 21, 'bio' => 'Did you know that St Albans had a power-cut', 'image' => 'Sammy.png', 'messages' => ''],
            ['name' => 'Fin', 'age' => 25, 'bio' => 'I love choccy cakeeee', 'image' => 'Fin.png', 'messages' => ''],
            ['name' => 'Charles', 'age' => 21, 'bio' => 'Mansfield are massive, here a fun time not a long one.', 'image' => 'Charles.png', 'messages' => ''],
            ['name' => 'Joe', 'age' => 21, 'bio' => 'greggs sausage roll and you are all I need', 'image' => 'Joe.png', 'messages' => ''],
            ['name' => 'Sam', 'age' => 21, 'bio' => 'Yoooo fam wys to me babes', 'image' => 'Sam.png', 'messages' => ''],
            ['name' => 'Gilly', 'age' => 28, 'bio' => 'Dordy baby girl, the name is Gilliam', 'image' => 'Gilly.png', 'messages' => ''],
            ['name' => 'Ben', 'age' => 45, 'bio' => 'Unintelligable', 'image' => 'Ben.png', 'messages' => ''],
            ['name' => 'Tom', 'age' => 21, 'bio' => 'My second name is King, Would you want to be my Queen ?', 'image' => 'tom.png', 'messages' => ''],
            ['name' => 'Nathan', 'age' => 21, 'bio' => 'United lost again, thats life aint it', 'image' => 'Nathan.png', 'messages' => ''],
            ['name' => 'Niamh', 'age' => 22, 'bio' => 'eat, reheat and GO !!!!', 'image' => 'Niamh.png', 'messages' => ''], 
            ['name' => 'Blammy', 'age' => 25, 'bio' => 'The names Blammy. Blammy Fam !!', 'image' => 'Blammy.png', 'messages' => ''],            
            
        ];

        foreach($daters as $dater){
            Dater::create([
                'name' => $dater['name'],
                'age' => $dater['age'],
                'bio' => $dater['bio'],
                'image' => $dater['image'],
                'messages' => $dater['messages']
            ]);
        }




    }
}
