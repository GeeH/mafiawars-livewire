<?php

use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->truncate();

        DB::table('levels')->insert([
            'id' => 1,
            'xp_needed' => 0
        ]);

        DB::table('levels')->insert([
            'id' => 2,
            'xp_needed' => 25
        ]);

        DB::table('levels')->insert([
            'id' => 3,
            'xp_needed' => 100
        ]);

        DB::table('levels')->insert([
            'id' => 999999,
            'xp_needed' => 999999999
        ]);
    }
}
