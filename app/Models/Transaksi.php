<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'tb_transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $guarded = '[]';
    protected $fillable = [
        'id_transaksi',
        'pelanggan_transaksi',
        'tgl_transaksi',
        'harga_transaksi',
        'berat_transaksi',
        'tgl_transaksi_selesai',
        'status_transaksi'
    ];
    public function harga() : BelongsTo
    {
        return $this->belongsTo(Harga::class, 'harga_transaksi');
    }

    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_transaksi');
    }

    public function pakaian(): HasMany
    {
        return $this->hasMany(Pakaian::class, 'pakaian_transaksi' ,'id_transaksi');
    }
}