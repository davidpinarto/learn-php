<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $fillable = ['id', 'name', 'position', 'salary'];
    // sengaja di disable karena ketika database tidak memiliki timestamp seperti updated_at, data akan gagal ditambah ataupun di perbarui
    public $timestamps = false;
}
