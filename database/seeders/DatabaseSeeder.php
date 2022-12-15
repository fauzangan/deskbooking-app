<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Msite;
use App\Models\Mlocation;
use App\Models\User;
use App\Models\Mareaheader;
use App\Models\Mareadetail;
use App\Models\Treservation;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Ilyasa Aliadjrun',
            'username' => 'ilyas',
            'email' => 'ilyas@gmail.com',
            'password' => bcrypt('12345'),
            'is_admin' => 1
        ]);

        User::create([
            'name' => 'Ojan',
            'username' => 'ojan',
            'email' => 'ojan@gmail.com',
            'password' => bcrypt('12345'),
            'is_admin' => 0
        ]);

        Msite::create([
            'txtSiteName' => 'Tembalang'
        ]);

        Msite::create([
            'txtSiteName' => 'Banyumanik'
        ]);

        Mlocation::create([
            'txtLocationName' => 'Bulusan',
            'intSiteId' => 1
        ]);

        Mlocation::create([
            'txtLocationName' => 'Gondang',
            'intSiteId' => 1
        ]);

        Mareaheader::create([
            'txtareaname' => 'Kantor 1',
            'intlocationid' => 1
        ]);

        Mareaheader::create([
            'txtareaname' => 'Kantor 2',
            'intlocationid' => 2
        ]);

        Mareadetail::create([
            'txtdeskname' => 'Desk A1',
            'txtstatus' => 'available',
            'intareaheaderid' => 1
        ]);
        Mareadetail::create([
            'txtdeskname' => 'Desk A2',
            'txtstatus' => 'available',
            'intareaheaderid' => 1
        ]);
        Mareadetail::create([
            'txtdeskname' => 'Desk A3',
            'txtstatus' => 'available',
            'intareaheaderid' => 1
        ]);
        Mareadetail::create([
            'txtdeskname' => 'Desk A4',
            'txtstatus' => 'available',
            'intareaheaderid' => 1
        ]);
        Mareadetail::create([
            'txtdeskname' => 'Desk A5',
            'txtstatus' => 'available',
            'intareaheaderid' => 1
        ]);
        Mareadetail::create([
            'txtdeskname' => 'Desk A6',
            'txtstatus' => 'available',
            'intareaheaderid' => 1
        ]);
        Mareadetail::create([
            'txtdeskname' => 'Desk A7',
            'txtstatus' => 'available',
            'intareaheaderid' => 1
        ]);
        Mareadetail::create([
            'txtdeskname' => 'Desk A8',
            'txtstatus' => 'available',
            'intareaheaderid' => 1
        ]);
        Mareadetail::create([
            'txtdeskname' => 'Desk A9',
            'txtstatus' => 'available',
            'intareaheaderid' => 1
        ]);

        Mareadetail::create([
            'txtdeskname' => 'Desk A10',
            'txtstatus' => 'available',
            'intareaheaderid' => 1
        ]);

        Mareadetail::create([
            'txtdeskname' => 'Desk A1',
            'txtstatus' => 'available',
            'intareaheaderid' => 2
        ]);

        Mareadetail::create([
            'txtdeskname' => 'Desk A2',
            'txtstatus' => 'unavailable',
            'intareaheaderid' => 2
        ]);

        Mareadetail::create([
            'txtdeskname' => 'Desk A1',
            'txtstatus' => 'available',
            'intareaheaderid' => 3
        ]);

        Treservation::create([
            'dtreservation' => Carbon::parse('2022-12-15'),
            'txtinserted' => 'ojan',
            'intareadetailid' => 1,
        ]);
        
    }
}
