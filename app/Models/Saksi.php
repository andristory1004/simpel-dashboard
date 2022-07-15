<?php

namespace App\Models;

use App\Models\Province;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Saksi extends Model
{
    use HasFactory;

    protected $table = 'saksis';
    protected $fillable = [
        'id', 'nik', 'nama', 'email', 'no_telepon', 'provisi_id', 'kabupaten_id', 'kecamatan_id', 'kelurahan_id', 'no_tps', 'created_at', 'updated_at'
    ];

    /**
     * Get the provinsi that owns the Saksi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provinsi()
    {
        return $this->belongsTo(Province::class, 'provinsi_id');
    }

    /**
     * Get the kabupaten that owns the Tps
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kabupaten()
    {
        return $this->belongsTo(Regency::class, 'kabupaten_id');
    }

    /**
     * Get the kecamatan that owns the Tps
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kecamatan()
    {
        return $this->belongsTo(District::class, 'kecamatan_id');
    }

    /**
     * Get the kelurahan that owns the Tps
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelurahan()
    {
        return $this->belongsTo(Village::class, 'kelurahan_id');
    }
}