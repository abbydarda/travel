<?php

use Illuminate\Database\Seeder;

class Armada extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $armada = array(
          [
          'no_pol' => 123456789,
          'nama_kendaraan' => "Mobil X",
          'jenis_kendaraan' => 'Minibus',
          'jumlah_kursi' => 14,
          ],
          [
            'no_pol' => 234567891,
            'nama_kendaraan' => "Mobil Y",
            'jenis_kendaraan' => 'Minibus',
            'jumlah_kursi' => 12,
          ],
        );

        DB::table('armada')->insert($armada);
    }
}
