<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;
    protected $fillable = ['tipe','lantai','kamar','luas','harga','garasi','gambar','ahp'];
    protected $dates = ['deleted_at'];
}
