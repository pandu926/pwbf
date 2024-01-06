<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $table = 'pendidikan';
    protected $fillable = ['nama_sekolah', 'tahun_masuk', 'tahun_keluar'];
    public $timestamps = false;

}
