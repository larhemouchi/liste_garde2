<?php

use Illuminate\Database\Seeder;

class RolySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        factory(App\Roly::class, 80)->create();

        $rolies = App\Roly::all();


        $rolies->each(function ($roly){ 
            $roly->specs()->save( factory(App\Spec::class)->make() ); 
        });







    }
}
