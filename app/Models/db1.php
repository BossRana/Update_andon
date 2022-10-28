<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class db1 extends Model
{
    protected $connection = 'mysql';
    
    protected $table = 'mhs';

    protected $fillable = [
        'nim', 
        'namamhs', 
        'alamat',
        
        
    ];

}
