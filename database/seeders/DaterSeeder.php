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
            ['name' => 'David', 'age' => 25, 'bio' => 'Im a fun dude', 'image' => 'dave.png', 'messages' => ''],
            ['name' => 'james', 'age' => 20, 'bio' => 'Im a more fun dude', 'image' => 'james.png', 'messages' => ''],
            ['name' => 'Angelina', 'age' => 21, 'bio' => 'I like cake', 'image' => 'angelina.png', 'messages' => ''],
            ['name' => 'Aguero', 'age' => 25, 'bio' => 'Im an astronaut', 'image' => 'aguero.png', 'messages' => ''],
            
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
