<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koor extends Model
{
    protected $table = 'dosen_koor';
    protected $fillable = ['nik','nama_dos','email','google_id'];
    
    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute)
        {
        parent::setAttribute($key, $value);
        }
    }
    public function dos_pra_kp(){
        return $this->belongsTo('App\pra_kp');
    }
    public function dos_kp(){
        return $this->belongTo('App\kp');
    }
}
