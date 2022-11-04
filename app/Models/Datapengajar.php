<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapengajar extends Model
{
    use HasFactory;
    protected $fillable=['id_pengajar','nama_pengajar','asal_kampus','no_telp','email','mapel','nama_bank','rek_bank','an_rek_bank'];
}
