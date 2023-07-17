<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Harga extends Model
{
    use HasFactory;
    protected $table = 'tb_harga';
    protected $primaryKey = 'harga_id';
    protected $guarded = '[]';
    protected $fillable = [
        'harga_id',
        'berat',
        'harga_per_kilo'
    ];
    public function transaksi() :HasMany
    {
        return $this->hasMany(Transaksi::class, 'harga_transaksi', 'harga_id');    
    }
}
