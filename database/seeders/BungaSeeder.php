<?php

namespace Database\Seeders;

use App\Models\Bunga;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BungaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bunga::insert([
            [
                'nama'=>'Bunga Matahari',
                'harga' => '10000',
                'stok'=>'20',
                'gambar'=>'matahari.jpg'
            ],
            [
                'nama'=>'Bunga Mawar',
                'harga' => '20000',
                'stok'=>'12',
                'gambar'=>'mawar.jpg'
            ]
        ]);
    }
}
