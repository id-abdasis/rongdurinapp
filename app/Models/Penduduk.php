<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $guarded = [];
    protected $hidden = [
        'id', 'created_at', 'updated_at', 'blok'
    ];
}