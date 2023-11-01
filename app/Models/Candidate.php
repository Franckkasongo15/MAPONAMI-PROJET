<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'name',
        'firstname',
        'pseudo',
        'genre',
        'phone',
        'photo',
        'promotion',
        'motivation',
        'slogan',
        'vote_number'

    ];
}
