<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paslon extends Model
{
    use HasFactory;

    protected $table = 'paslons';
    protected $fillable = [
        'id', 'nama_ketua', 'nama_wakil', 'no_urut', 'image_ketua', 'image_wakil', 'ceated_at', 'updated_at'
    ];
}