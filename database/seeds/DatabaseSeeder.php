<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ItemsSeeder::class);
        $this->call(CharacterSeeder::class);
        $this->call(QuestSeeder::class);
        $this->call(LevelSeeder::class);

    }
}
