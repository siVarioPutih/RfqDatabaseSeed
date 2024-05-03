<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class dataPenjualan extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'id_barang',
        'qty_jual',
        'tgl_transaksi_jual',
    ];
}
