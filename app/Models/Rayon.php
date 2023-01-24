<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'pembimbing_rayon','no_telepon','alamat'
    ];
}
