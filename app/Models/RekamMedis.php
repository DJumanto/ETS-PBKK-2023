<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $fillable = [
        'pasien_id',
        'dokter_id',
        'kondisi_tubuh',
        'suhu_tubuh',
    ];
}
