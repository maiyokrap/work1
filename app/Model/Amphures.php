<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use App\Model\Province;

Class Amphures extends Model
{
    protected $table = 'amphures';
    protected $primaryKey = 'id_amphures';
    public $timestamps = false;

    protected $fillable = [
        'code',
        'name_th',
        'name_en',
        'province_id'

    ];
    public function getAmphures() {
        return $this->belongsTo(Province::class, 'id_province', 'id_province');
    }
   

    
}