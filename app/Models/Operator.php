<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    protected $table = 'operators';
    protected $fillable = [
        'id', 'nama', 'email', 'no_telepon', 'hak_akses', 'riwayat', 'status', 'created_at', 'update_at'
    ];
}