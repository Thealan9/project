<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
            'name_client',
            'device',
            'model',
            't_service',
            'image',
            'details',
            'progress'
    ];
}
