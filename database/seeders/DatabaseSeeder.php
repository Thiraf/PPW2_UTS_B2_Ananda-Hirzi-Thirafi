<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pemain;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Pemain::create([
            'nama_pemain' => 'Jokow',
            'no_punggung'=> '7',
            'posisi'=> '6',
        ]
        );

        
        Pemain::create([
            'nama_pemain' => 'Jokowi',
            'no_punggung'=> '1',
            'posisi'=> '5',
        ]
        );

        
        Pemain::create([
            'nama_pemain' => 'Jokodo',
            'no_punggung'=> '3',
            'posisi'=> '4',
        ]
        );

    }
}
