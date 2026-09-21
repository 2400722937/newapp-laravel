<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable =[
        'full-name',
        'campus-email',
        'department',
        'message',
    ];
}
