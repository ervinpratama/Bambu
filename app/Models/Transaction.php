<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{   
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = ['order_id','user_id', 'total', 'no_hp', 'alamat', 'provinsi', 'kabupaten_kota', 'kecamatan', 'desa_kelurahan', 'kodepos', 'transaction_date'];

    public function bukti_transfer()
    {
        return $this->hasOne(BuktiTransfer::class, 'transaction_id');
    }
    
    public function barang()
    {
        return $this->belongsToMany(Barang::class)->withPivot('jumlah');
    }
}
