<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';

    protected $fillable = [
        'title',
        'stream_date',
        'stream_time',
        'description'
    ];

    protected $casts = [
        'stream_date' => 'date',
    ];
}