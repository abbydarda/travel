<?php

use Illuminate\Database\Seeder;

class Supir extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supir = [
          [
            "no_identitas" => 123456789,
            "nama_supir" => "Saepul Bahri"
          ],
          [
            "no_identitas" => 234567891,
            "nama_supir" => "Jajang"
          ],
          [
            "no_identitas" => 345678912,
            "nama_supir" => "Dedi"
          ],
        ];
        
        DB::table('supir')->insert($supir);
    }
}
