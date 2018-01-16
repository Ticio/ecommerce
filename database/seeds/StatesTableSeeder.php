<?php

use Illuminate\Database\Seeder;
use App\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state = new State;
        $state->name = "Active";
        $state->save();

        $state = new State;
        $state->name = "Suspended";
        $state->save();

        $state = new State;
        $state->name = "Desactive";
        $state->save();

        $state = new State;
        $state->name = "Waiting";
        $state->save();

        $state = new State;
        $state->name = "Removed";
        $state->save();
    }
}
