<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Product;
use App\Models\Location;
use App\Models\UserProfile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         Product::factory()->create([
            'name' => 'Dummy Product',
            'price' => 0,
            'category' => 'Men',
            'image' => 'https://via.placeholder.com/150',
            'stock' => 0,
        ]);

        User::factory(10)->create();
        Product::factory(50)->create();
        UserProfile::factory(10)->create();

        User::factory()->create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('SuperAdmin123'),
            'role' => 'superadmin'
        ]);

        $locations = [
            'Jakarta',
            'Surabaya',
            'Bandung',
            'Medan',
            'Semarang',
            'Makassar',
            'Yogyakarta',
            'Malang',
            'Denpasar',
            'Palembang',
            'Balikpapan',
            'Pekanbaru',
            'Tangerang',
            'Bogor',
            'Depok',
            'Batam',
            'Padang',
            'Bandar Lampung',
            'Bekasi',
            'Pontianak',
            'Cimahi',
            'Surakarta',
            'Manado',
            'Banjarmasin',
            'Samarinda',
            'Tegal',
            'Kupang',
            'Binjai',
            'Pekalongan',
            'Padangsidimpuan',
            'Blitar',
            'Serang',
            'Probolinggo',
            'Cilegon',
            'Madiun',
            'Mataram',
            'Pasuruan',
            'Sibolga',
            'Salatiga',
            'Cirebon',
            'Batu',
            'Bitung',
            'Lubuklinggau',
            'Singkawang',
            'Prabumulih',
            'Kediri',
            'Jambi',
            'Sukabumi',
            'Palangkaraya',
            'Parepare',
            'Bontang',
            'Tanjung Pinang',
            'Baturaja',
            'Sungai Penuh',
            'Tanjungbalai',
            'Tanjung Pandan',
            'Mojokerto',
            'Tasikmalaya',
            'Banda Aceh',
            'Langsa',
            'Blora',
            'Sabang',
            'Magelang',
            'Sofifi',
            'Dumai',
            'Singaraja',
            'Lhokseumawe',
            'Bima',
            'Palopo',
            'Pangkal Pinang',
            'Maumere',
            'Tarakan',
            'Kendari',
            'Kuala Tungkal',
            'Tual',
            'Bau-Bau',
            'Kupang',
            'Palu',
            'Gorontalo',
            'Tomohon',
            'Ternate',
            'Tidore',
            'Banda',
            'Ambon',
            'Jayapura',
            'Merauke',
            'Timika',
            'Biak',
            'Manokwari',
            'Sorong'
        ];

        foreach ($locations as $location) {
            Location::create(['name' => $location]);
        }

        
    }
}
