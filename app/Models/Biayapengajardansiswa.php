<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biayapengajardansiswa extends Model
{
    use HasFactory;
    protected $fillable=['id_pengajar','id_siswa','nama_pengajar','nama_siswa','nama_orang_tua',
'regional','durasi_lembur','biaya_fotokopi','tagihan_siswa','biaya_pendaftaran','fee_pengajar',
'realisasi_tagihan_siswa','realisasi_fee_pengajar','realisasi_biaya_pendaftaran'];
}