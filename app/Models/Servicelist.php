<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicelist extends Model
{
    use HasFactory;

    protected $table = 'servicelist';

    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}
