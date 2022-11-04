<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifyadmin extends Model
{
    use HasFactory;
    protected $fillable=['id_pengajar','nama_pengajar'];

}