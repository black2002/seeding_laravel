<?php

use Illuminate\Database\Seeder;
use Collective\Html\Eloquent;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Database\Eloquent\Model::unguard();


        for ($i = 0; $i < 50; $i++) {
            $user = factory(App\User::class)->create();
            $role = factory(App\Role::class)->create();
            $article = factory(App\Article::class)->create();

            $country = factory(App\Country::class)->create();


            DB::table('role_user')->insert([
                'user_id' => rand(1,50),
                'role_id' => rand(0,50)
            ]);



        }
        \Illuminate\Database\Eloquent\Model::reguard();
    }
}
