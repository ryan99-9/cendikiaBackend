<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaranlbb extends Model
{
    use HasFactory;
    protected $fillable=['hal','nominal'];
}