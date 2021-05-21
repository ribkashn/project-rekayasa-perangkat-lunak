<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class kpModel extends Model
{
    protected $table = "kp";
    protected $primaryKey = 'id_kp';
    protected $fillable = ['semester','tahun','nim','judul','tools','spek','lembaga','pimpinan','no_telp','alamat','fax','dokumen','status_kp','dosen_id'];

}
