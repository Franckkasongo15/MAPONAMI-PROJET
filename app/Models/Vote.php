<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'name',
        'prenom',
        'pseudo',
        'genre',
        'numero',
        'photo',
        'promotion',
        'motivation',
        'slogan',
        'vote_number'

    ];
}
