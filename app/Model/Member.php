<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;


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

    
}