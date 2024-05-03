<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class dataPembelian extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'id_barang',
        'qty_beli',
        'tgl_transaksi_beli',
    ];
}
