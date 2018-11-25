<?php


use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds for State.
     *
     * @return void
     */
    public function run()
    {
        App\State::create([ 'name' => 'Trainer Review']);
        App\State::create([ 'name' => 'Self Study']);
        App\State::create([ 'name' => 'Pre Assessment']);
        App\State::create([ 'name' => 'Lab']);
        App\State::create([ 'name' => 'Post Assessment']);
        App\State::create([ 'name' => 'Complete']);
    }
}
