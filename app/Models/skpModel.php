<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skpModel extends Model
{
    protected $table = "suratkp";
    protected $fillable = ['semester','tahun','nim','lembaga','pimpinan','no_telp','alamat','fax','dokumen','status_skp'];
}
