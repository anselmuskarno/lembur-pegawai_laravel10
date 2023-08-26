<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class LemburPegawai extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_pegawai',
        'nomor_hp',
        'jabatan',
        'tanggal_lembur',
        'jam_mulai',
        'jam_selesai',
        'upah_perjam',
        'total_upah',
        'hal_yang_dikerjakan',
        'status'
    ];
}
