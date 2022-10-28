<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class db2 extends Model
{
    protected $connection = 'mysql2';
    
    protected $table = 'mhs';

    protected $fillable = [
        'nim', 
        'namamhs', 
        'alamat',
        
        
    ];

}
