<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $fillable = [
        'kategori',
        'no_surat',
        'kode_surat',
        'perihal',
        'tanggal_surat',
        'tertuju',
        'jenis_surat',
        'file',
    ];
}
