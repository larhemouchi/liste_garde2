<?php
use App\{User, Roly};
use Illuminate\Database\Seeder;

class BouncerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $superAdmin = User::find(1000);
        $admin = User::find(1001);
        $user = User::find(1002);



        $superAdmin->assign('superAdmin');
        $admin->assign('admin');
        $user->assign('user');

        $users = User::whereNotIn('id', [1000,1001,1002])->get();

        $users->each(function ($user){ 

            $user->assign('user');

        });


    }
}
