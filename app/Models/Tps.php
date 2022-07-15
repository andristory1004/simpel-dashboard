<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tps extends Model
{
    use HasFactory;
    protected $table = 'tps';
    protected $fillable = [
        'id', 'provinsi_id', 'kabupaten_id', 'kecamatan_id', 'kelurahan_id', 'no_tps', 'kebutuhan', 'keterangan', 'created_at', 'updated_at'
    ];

    /**
     * Get the user that owns the Tps
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