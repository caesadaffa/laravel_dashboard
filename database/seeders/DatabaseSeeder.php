<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\kelas;
use App\Models\students;
use GuzzleHttp\Promise\Create;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        kelas::factory(10)->create();
        students::factory(10)->create();

        // kelas :: Create([
        //     'kelas' => '10 PPLG 1'
        // ]);

        // kelas :: Create([
        //     'kelas' => '10 PPLG 2'
        // ]);
    
        // kelas :: Create([
        //     'kelas' => '11 PPLG 1'
        // ]);
    
        // kelas :: Create([
        //     'kelas' => '11 PPLG 2'
        // ]);

        // kelas :: Create([
        //     'kelas' => '12 PPLG 1'
        // ]);

        // kelas :: Create([
        //     'kelas' => '12 PPLG 2'
        // ]);
        }
}
