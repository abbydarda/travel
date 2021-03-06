<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Jurusan::class);
        $this->call(Supir::class);
        $this->call(Jadwal::class);
        $this->call(Armada::class);  
    }
}
