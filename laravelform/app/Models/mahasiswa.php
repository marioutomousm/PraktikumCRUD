<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class mahasiswa extends Model
{
    use SoftDeletes;

    protected $table ='mahasiswas';
    protected $fillable = [
        
        'nim',
        'nama',
        'umur',
        'alamat',
        'kota',
        'jurusan',
        'kelas',
        //'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected $hidden;
}
