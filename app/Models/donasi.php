<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donasi extends Model
{
    use HasFactory;

    public function konfirmasi()
    {

        return $this->hasMany('App\Models\Konfirmasi', 'donasi_id');
    }
}
