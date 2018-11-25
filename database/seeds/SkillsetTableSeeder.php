<?php

use Illuminate\Database\Seeder;

class SkillsetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Skillset::create(['description' => 'Safety']);
        App\Skillset::create(['description' => 'Product Overview']);
        App\Skillset::create(['description' => 'Routine Maintenance']);
        App\Skillset::create(['description' => 'HPU Maintenance']);
        App\Skillset::create(['description' => 'Health Monitoring']);
        App\Skillset::create(['description' => 'Software - Aero Pro']);
        App\Skillset::create(['description' => 'Software - RPC']);
        App\Skillset::create(['description' => 'Software - TestSuite']);

    }
}
