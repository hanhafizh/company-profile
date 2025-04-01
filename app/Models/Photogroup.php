<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photogroup extends Model
{
    use HasFactory;

    protected $table = 'photogroup';

    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'image'
    ];
}
