<?php

use Illuminate\Database\Seeder;

class FseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Fse::create(['name' => 'Michael Jones']);
        App\Fse::create(['name' => 'Nick Evans']);
        App\Fse::create(['name' => 'Anthony Borg']);
        App\Fse::create(['name' => 'Alan Einbeck']);
        App\Fse::create(['name' => 'Michael San Martin']);
        App\Fse::create(['name' => 'Alexis Carre']);
        App\Fse::create(['name' => 'Keith Yeager']);
        App\Fse::create(['name' => 'Kyle Bieri']);
        App\Fse::create(['name' => 'Gene Powell']);
        App\Fse::create(['name' => 'Sam Bastes']);
    }
}
