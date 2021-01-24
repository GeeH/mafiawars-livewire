<?php

use App\Item;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->truncate();
        DB::table('itemables')->truncate();

        /** @var Item $item */
        $item = \App\Item::where('name', '=', 'Keyboard')->firstOrFail();

        $character = new \App\Character();
        $character->name = 'Spabby';
        $character->energy = 100;
        $character->money = 1000;
        $character->level = 1;
        $character->xp = 1;
        $character->save();

        $character->items()->attach($item);
    }
}
