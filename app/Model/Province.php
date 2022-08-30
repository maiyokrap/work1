<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;


Class Province extends Model
{
    protected $table = 'province';
    protected $primaryKey = 'Provinc_Id';
    public $timestamps = false;

    protected $fillable = [
        'Province_name',
        'District',
        

    ];

    
}