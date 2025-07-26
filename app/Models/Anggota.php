<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $casts = [
        'birth' => 'datetime',
        'active_until' => 'datetime',
    ];
}
