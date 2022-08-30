<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;


Class Register extends Model
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
        'District',
        'Province',
        'Zip_code',
        'Password'

    ];

    
}