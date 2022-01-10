<?php

namespace Database\Seeders;

use App\Models\Dataanak;
use Illuminate\Database\Seeder;

class DataanaksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat sample data anak
        $dataanak1 = Dataanak::create(['nama' => 'Putri', 'umur' => '10', 'ttl' => 'Bandung, 18 mei 2011', 'pendidikan' => 'SD', 'wali' => 'Ida']);
        $dataanak2 = Dataanak::create(['nama' => 'Ajeng', 'umur' => '11', 'ttl' => 'Sukabimi, 09 april 2010 ', 'pendidikan' => 'SD', 'wali' => 'Dadang']);
        $dataanak3 = Dataanak::create(['nama' => 'Jaja', 'umur' => '5', 'ttl' => 'Subang, 10 November 2016', 'pendidikan' => 'Belum Sekolah', 'wali' => 'Asep']);

    }
}
