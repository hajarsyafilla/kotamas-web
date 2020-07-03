<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Model\Download;

class DownloadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Borang Permohonan Menjadi Anggota', 'file_name' => 'borang_permohonan_anggota.pdf'],
            ['name' => 'Borang Penama', 'file_name' => '4-Borang-Penama.pdf'],
            ['name' => 'Borang Simpanan Khas', 'file_name' => '5-Borang-Simpanan-Khas.pdf'],
            ['name' => 'Borang Penambahan Yuran', 'file_name' => '7-Borang-Penambahan-Yuran.pdf'],
            ['name' => 'Borang Dividen 2017', 'file_name' => 'BORANG-DIVIDEN-2017.pdf'],
            ['name' => 'Borang Pertukaran Alamat', 'file_name' => '8-Borang-pertukaran-alamat.pdf'],
            ['name' => 'Borang Keahlian Darul Jenazah', 'file_name' => '9-Borang-Keahlian-Darul-Jenazah.pdf'],
            ['name' => 'Borang Kekal Anggota', 'file_name' => 'Borang-Kekal-Anggota.pdf'],
            ['name' => 'Borang Pinjaman Anggota', 'file_name' => 'BORANG-PINJAMAN-2018.pdf'],
            ['name' => 'Borang Pelepasan Penjamin', 'file_name' => '3-Borang-Pelepasan.pdf'],
            ['name' => 'Jadual Bayaran Balik Pinjaman', 'file_name' => 'Jadual-Bayaran-Balik-Pinjaman-Kota-Mas.pdf'],
        ];

        $seed_path = public_path('files/seeds');
        foreach ($data as $item) {
            if (!Download::where('name', $item['name'])->first()) {
                $fn = Storage::putFile('/', new File("{$seed_path}/" . $item['file_name']));
                $m = new Download;
                $m->name = $item['name'];
                $m->file_name = $item['file_name'];
                $m->hash_name = $fn;
                $m->size = Storage::size($fn);
                $m->mime_type = Storage::mimeType($fn);
                $m->download_category_id = 1;
                $m->created_at = Carbon::now();
                $m->save();
            }
        }
    }
}
