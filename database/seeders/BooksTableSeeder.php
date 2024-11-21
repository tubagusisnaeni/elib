<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image_url = [

        ];
        // Daftar judul dan pengarang
        $titles = [
            'Laskar Pelangi',
            'Bumi Manusia',
            'Anak Semua Bangsa',
            'Siti Nurbaya',
            'Pulang',
            'Pilar-pilar Kekuatan',
            'Cinta dan Tanda-tanda',
            'Kumpulan Cerita Rakyat',
            'Bintang di Surga',
            'Negeri 5 Menara'
        ];

        $authors = [
            'Andrea Hirata',
            'Pramoedya Ananta Toer',
            'Pramoedya Ananta Toer',
            'Marah Roesli',
            'Tere Liye',
            'Habiburrahman El Shirazy',
            'Dewi Lestari',
            'Kahlil Gibran',
            'Ayu Utami',
            'A. Fuadi'
        ];

        // Menghasilkan 100 data
        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert([
                'image' => $image_url[array_rand($image_url)],
                'title' => $titles[array_rand($titles)], // Pilih judul secara acak
                'author' => $authors[array_rand($authors)], // Pilih pengarang secara acak
                'category' => 'Fiksi', // Contoh kategori, bisa disesuaikan
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
