<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careerlist extends Model
{
    use HasFactory;

    protected $table = 'careerlist';

    protected $fillable = [
        'title_career',
        'description_career',
        'company_name',
        'location',
        'category',
        'job_type',
        'requirements',
        'responsibilities',
        'deadline',
    ];
}
