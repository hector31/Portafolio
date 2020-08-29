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
        // $this->call(UserSeeder::class);
        
        
        // factory('App\Project',1)->create();
        factory('App\User',5)->create();
        
        
        
        
        
        
        
        // factory('App\User',10)->create()->each(function($user){

        //     $user->posts()->save(factory('App\Project')->make());
        // });
    }
}
