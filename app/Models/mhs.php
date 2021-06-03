<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mhs extends Model
{
    protected $table = 'mhs';
    protected $fillable = ['nim','nama','email','semester'];
    protected $primaryKey = 'id_mhs';
    public function surat_kp(){
        return $this->hasMany('App\skp'); //sesuai nama model
    }
    public function pra_kp(){
        return $this->belongsTo('App\pkp');
    }
    public function kp(){
        return $this->belongsTo('App\kp');
    }
}
