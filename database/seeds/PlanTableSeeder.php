<?php

use Illuminate\Database\Seeder;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Plan::create(['fse_id' => 1, 'skillset_id' => 1, 'state_id' => 1]);
        App\Plan::create(['fse_id' => 1, 'skillset_id' => 2, 'state_id' => 3]);

        App\Plan::create(['fse_id' => 2, 'skillset_id' => 3, 'state_id' => 5]);
        App\Plan::create(['fse_id' => 2, 'skillset_id' => 4, 'state_id' => 2]);

        App\Plan::create(['fse_id' => 3, 'skillset_id' => 5, 'state_id' => 4]);
        $plan = App\Plan::create(['fse_id' => 3, 'skillset_id' => 6, 'state_id' => 6]);
        $plan->completed = date('Y-m-d H-i-s');
        $plan->save();

        App\Plan::create(['fse_id' => 4, 'skillset_id' => 7, 'state_id' => 1]);
        App\Plan::create(['fse_id' => 4, 'skillset_id' => 8, 'state_id' => 3]);

        App\Plan::create(['fse_id' => 5, 'skillset_id' => 1, 'state_id' => 5]);
        App\Plan::create(['fse_id' => 5, 'skillset_id' => 2, 'state_id' => 2]);

        App\Plan::create(['fse_id' => 6, 'skillset_id' => 3, 'state_id' => 4]);
        $plan = App\Plan::create(['fse_id' => 6, 'skillset_id' => 4, 'state_id' => 6]);
        $plan->completed = date('Y-m-d H-i-s');
        $plan->save();

        App\Plan::create(['fse_id' => 5, 'skillset_id' => 5, 'state_id' => 1]);
        App\Plan::create(['fse_id' => 5, 'skillset_id' => 6, 'state_id' => 3]);

        App\Plan::create(['fse_id' => 6, 'skillset_id' => 7, 'state_id' => 5]);
        App\Plan::create(['fse_id' => 6, 'skillset_id' => 8, 'state_id' => 2]);

        App\Plan::create(['fse_id' => 7, 'skillset_id' => 1, 'state_id' => 4]);
        $plan = App\Plan::create(['fse_id' => 7, 'skillset_id' => 2, 'state_id' => 6]);
        $plan->completed = date('Y-m-d H-i-s');
        $plan->save();

        App\Plan::create(['fse_id' => 8, 'skillset_id' => 5, 'state_id' => 1]);
        App\Plan::create(['fse_id' => 8, 'skillset_id' => 6, 'state_id' => 3]);

        App\Plan::create(['fse_id' => 9, 'skillset_id' => 7, 'state_id' => 5]);
        App\Plan::create(['fse_id' => 9, 'skillset_id' => 8, 'state_id' => 2]);

        App\Plan::create(['fse_id' => 10, 'skillset_id' => 1, 'state_id' => 4]);
        $plan = App\Plan::create(['fse_id' => 10, 'skillset_id' => 2, 'state_id' => 6]);
        $plan->completed = date('Y-m-d H-i-s');
        $plan->save();
    }
}
