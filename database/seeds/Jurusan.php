<?php

use Illuminate\Database\Seeder;

class Jurusan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $jurusan = array([
          'nama_jurusan' => 'Purwakarta - Bandung',
          'biaya_jurusan' => 30000
        ],
        [
          'nama_jurusan' => 'Bandung - Purwakarta',
          'biaya_jurusan' => 30000
        ]);

      DB::table('jurusan')->insert($jurusan);
    }
}
