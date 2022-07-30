<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCriteria extends Model
{
    protected $fillable = ['code', 'name', 'nilaik', 'nilaib'];
    protected $dates = ['deleted_at'];
}
