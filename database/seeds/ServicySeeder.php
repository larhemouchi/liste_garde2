<?php

use Illuminate\Database\Seeder;

class ServicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        factory(App\Servicy::class, 30)->create();


        $servicies = App\Servicy::all();


        // Populate the pivot table
        App\User::all()->each(function ($user) use ($servicies) { 
            $user->servicies()->attach(
                $servicies->random(rand(1, 3))->pluck('id')->toArray()
            ); 
        });
    }
}
