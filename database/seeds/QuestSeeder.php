<?php

use App\Quest;
use Illuminate\Database\Seeder;

class QuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quests')->truncate();

        $quest = new Quest();
        $quest->name = 'Power up Laptop';
        $quest->description = 'It\'s time to start the day. Lets switch on our laptop and get going';
        $quest->level = 1;
        $quest->energy_cost = 5;
        $quest->reward_xp = 20;
        $quest->reward_money = 0;

        $quest->save();

        $quest = new Quest();
        $quest->name = 'Check Twitter';
        $quest->description = 'Before we start work, we just gotta check Twitter';
        $quest->level = 1;
        $quest->energy_cost = 3;
        $quest->reward_xp = 10;
        $quest->reward_money = 0;

        $quest->save();
    }
}
