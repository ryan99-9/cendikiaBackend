<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataorangtuadansiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_orangtua',
        'id_siswa',
        'nama_siswa',
        'kelas',
        'kurikulum',
        'alamat',
        'kecamatan',
        'kota',
        'no_telp',
        'email',
        'mapel',
        'jadwal_les',
        'jam_mulai_les',
        'mulai_les',
        'jenis_bimble',
        'gender_tentor',
        'program',
        'status_siswa',
        'regional',
        'status_pendaftaran'
    ];
}