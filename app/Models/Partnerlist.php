<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partnerlist extends Model
{
    use HasFactory;

    protected $table = 'partnerlist';

    protected $fillable = [
        'title',
        'image',
    ];
}
