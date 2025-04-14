<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceListDetails extends Model
{
    use HasFactory;

    protected $table = 'servicelist_details';

    protected $fillable = [
        'servicelist_id',
        'title',
        'subtitle',
        'image',
    ];

    public function serviceList()
    {
        return $this->belongsTo(ServiceList::class, 'servicelist_id');
    }
}
