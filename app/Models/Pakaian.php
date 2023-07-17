<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pakaian extends Model
{
    use HasFactory;
    protected $table = 'tb_pakaian';
    protected $primaryKey = 'id_pakaian';
    protected $guarded = '[]';
    protected $fillable = [
        'id_pakaian',
        'transaksi_pakaian',
        'jenis_pakaian',
        'jumlah_pakaian'
    ];
    public function transaksi(): BelongsTo
    {
        return $this->belongsTo(Transaksi::class, 'transaksi_pakaian');    
    }
}
