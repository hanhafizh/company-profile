<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourfeature extends Model
{
    use HasFactory;

    protected $table = 'ourfeature';

    protected $fillable = [
        'title',
        'description',
    ];
}
