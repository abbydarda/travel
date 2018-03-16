<?php

use Illuminate\Database\Seeder;

class Rutes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rutes = array([
            'rute_name' => 'Purwakarta - Bandung',
            'rute_price' => 30000
          ],
          [
            'rute_name' => 'Bandung - Purwakarta',
            'rute_price' => 30000
          ]);

        DB::table('rutes')->insert($rutes);
    }
}
