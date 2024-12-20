<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Featurelist extends Model
{
    use HasFactory;

    protected $table = 'featurelist';

    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
