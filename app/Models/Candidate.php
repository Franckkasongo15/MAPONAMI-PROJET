<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
        'image',
        'promotion',
        'motivation',
        'slogan',
        'vote_number'

    ];

    public function users(): BelongsToMany
    {
      return $this->belongsToMany(User::class);
    }

}
