<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_kegiatan',
        'tanggal_pinjam',
        'jam_pinjam',
        'jam_selesai',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}