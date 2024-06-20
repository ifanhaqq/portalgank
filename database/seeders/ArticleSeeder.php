<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert(
            [
                [
                    'title' => "Kekerasan Fisik",
                    'content' => "Kekerasan fisik dilakukan oleh pelaku kepada Korban dengan kontak fisik oleh pelaku kepada Korban dengan atau tanpa menggunakan alat bantu. Kekerasan fisik yang dimaksud dapat berupa:
                tawuran atau perkelahian massal
                penganiayaan
                perkelahian
                eksploitasi ekonomi melalui kerja paksa untuk memberikan keuntungan ekonomi bagi pelaku
                pembunuhan
                perbuatan lain yang dinyatakan sebagai Kekerasan fisik dalam ketentuan peraturan perundang-undangan.",
                    'image' => 'kekerasan-fisik.png',
                ],
                [
                    'title' => "Kekerasan Psikis",
                    'content' => "Kekerasan psikis, atau kekerasan psikologis, adalah bentuk kekerasan yang melibatkan tindakan atau kata-kata yang bertujuan untuk merusak kesejahteraan mental dan emosional seseorang. Ini bisa berupa intimidasi, manipulasi, penghinaan, pelecehan verbal, pengabaian emosional, atau perilaku yang membuat korban merasa tidak berharga, takut, atau terisolasi.",
                    'image' => 'kekerasan-psikis.png',
                ],
                [
                    'title' => "Perundungan",
                    'content' => "Perundungan, atau bullying, adalah tindakan yang melibatkan penggunaan kekerasan, intimidasi, atau pelecehan secara berulang terhadap seseorang, biasanya dalam konteks di mana terdapat ketidakseimbangan kekuasaan antara pelaku dan korban. Tindakan perundungan dapat terjadi di berbagai lingkungan, seperti sekolah, tempat kerja, atau secara online (cyberbullying).",
                    'image' => 'perundungan.png',
                ],
            ]
        );
    }
}
