<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
	use HasFactory;

	protected $table = 'barang';

	protected $fillable = ['kode_barang', 'nama_barang', 'id_kategori', 'harga', 'jumlah', 'ukuran', 'foto'];

	public function kategori()
	{
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}
	
	public function transactions()
	{
		return $this->belongsToMany(Transactions::class)->withPivot('jumlah');
	}
}
