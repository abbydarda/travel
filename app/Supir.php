<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    protected $table = "supir";
    protected $fillable = ['no_identitas', 'nama_supir'];
}
