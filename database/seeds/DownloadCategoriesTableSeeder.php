<?php

use Illuminate\Database\Seeder;
use Model\DownloadCategory;

class DownloadCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'General Downloads']
        ];

        foreach ($data as $item) {
            if (!DownloadCategory::where('name', $item['name'])->first()) {
                $m = new DownloadCategory;
                $m->name = $item['name'];
                $m->save();
            }
        }
    }
}
