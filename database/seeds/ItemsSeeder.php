<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('items')->truncate();
        DB::table('items')->insert([
            'name' => 'Keyboard',
            'description' => 'Just a normal Apple keyboard',
            'cost' => 100,
        ]);
    }
}
