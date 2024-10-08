<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
    // Define table name, fillable attributes, etc., if necessary
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];
}
