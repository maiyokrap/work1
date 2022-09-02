<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use App\Model\Province;


Class Member extends Model
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
        'Zip_code',
        'Password'


    ];
    public function getProvince() {
        return $this->belongsTo(Province::class, 'id_province', 'id_province');
    }

    
}