<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesage extends Model
{
    use HasFactory;

    protected $table = 'mesages';

    protected $fillable = ['name','email','pesan',];
}
