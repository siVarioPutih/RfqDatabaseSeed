<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class barang extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'nama_barang',
        'harga_beli',
        'harga_jual',
    ];
}
