<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visionmission extends Model
{
    use HasFactory;

    protected $table = 'visionmission';

    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'vision_title',
        'vision_description',
        'mission_title',
        'mission_description',
    ];
}
