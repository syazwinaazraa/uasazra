<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'tb_pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $guarded = '[]';
    protected $fillable = [
        'nama_pelanggan',
        'hp_pelanggan',
        'alamat_pelanggan'
    ];
    public function transaksi(): HasMany
    {
        return $this->hasMany(Transaksi::class, 'transaksi_pelanggan','id_pelanggan');    
    }

}
