<?php

use Illuminate\Database\Seeder;

class SpecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $specs = App\Spec::all();


        // Populate the pivot table
        App\User::all()->each(function ($user) use ($specs) { 
            $user->specs()->attach(
                $specs->random(rand(1, 3))->pluck('id')->toArray()
            ); 
        });

    }
}
