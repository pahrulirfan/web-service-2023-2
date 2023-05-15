<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya15Model extends Model
{
    protected $table = 'biaya15';
    protected $fillable = ['nama_konsumen', 'email_konsumen', 'jumlah_biaya', 'tanggal_transaksi', 'keterangan'];
}
