<?php

namespace App\Model;

use App\Model\Amphures;
use App\Model\Province;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'First_name',
        'Last_name',
        'Tel',
        'Email',
        'Addess',
        'id_province',
        'id_amphures',
        'Zip_code',
        'Password',

    ];
    public function getProvince()
    {
        return $this->belongsTo(Province::class, 'id_province', 'id_province');
    }
    public function getAmphures()
    {
        return $this->belongsTo(Amphures::class, 'id_amphures', 'id_amphures');
    }

}
