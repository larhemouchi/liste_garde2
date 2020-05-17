<?php

use Illuminate\Database\Seeder;

class GuardySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Guardy::class, 80)->create();

        $guardies = App\Guardy::all();


        $guardies->each(function ($guardy){ 
            $guardy->plages()->save( factory(App\Plage::class)->make() ); 
        });
    }
}
