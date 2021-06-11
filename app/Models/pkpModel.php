<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class pkpModel extends Model
{
    protected $table = "pra_kp";
    protected $primaryKey = 'id_pkp';
    protected $fillable = ['semester','tahun','nim','judul','tools','spek','lembaga','pimpinan','no_telp','alamat','fax','dokumen','status_pkp','dosen_id',
    'jadwal','status_ujian','ruangan','batas_awal','batas_akhir','nama'];
}
