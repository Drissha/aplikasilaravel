<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "Mahasiswa";
    protected $fillable = ['nama','jenkel','alamat','hp','jurusan','email'];

    public function dosen()
    {
        return $this->belongsTo('App\Models\dosen');
    }

    public function matkul()
    {
        return $this->belongsToMany('App\Models\Matkul')->withPivot(['nilai']);
    }
}
