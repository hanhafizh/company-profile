<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorslist extends Model
{
    use HasFactory;

    protected $table = 'directorslist';

    protected $fillable = [
        'name',
        'position',
        'image'
    ];
}
