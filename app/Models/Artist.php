<?php

namespace App\Models;

// use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Artist extends Authenticatable
{
    use HasFactory;
    protected $table = "artists";

    protected $hidden = [
        'password',
    ];
}

