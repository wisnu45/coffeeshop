<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'produks';
    protected $primarykey = 'id';
    protected $fillable = ['kdproduk','idkategori','nama','harga','stok','path','deskripsi',];
}
