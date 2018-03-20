<?php

use Illuminate\Database\Seeder;

class Jadwal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $begin = new DateTime("05:00");
      $end   = new DateTime("21:00");

      $interval = DateInterval::createFromDateString('30 min');

      $times    = new DatePeriod($begin, $interval, $end);

      foreach ($times as $time) {
          $data[] = [
            'nama_jadwal' => $time->format('H:i').'-'.$time->add($interval)->format('H:i'),
          ];
      }

      DB::table('jadwal')->insert($data);
    }
}
