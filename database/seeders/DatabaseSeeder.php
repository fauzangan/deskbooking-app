<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Msite;
use App\Models\Mlocation;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Ilyasa Aliadjrun',
            'username' => 'ilyas',
            'email' => 'ilyas@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Msite::create([
            'txtSiteName' => 'Tembalang'
        ]);

        Mlocation::create([
            'txtLocationName' => 'Bulusan',
            'intSiteId' => 1
        ]);

        Mlocation::create([
            'txtLocationName' => 'Gondang',
            'intSiteId' => 1
        ]);
    }
}
