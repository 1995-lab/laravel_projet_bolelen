<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelance extends Model
{
    //
    protected $fillable = [
        'nom', 'prenom', 'adresse', 'telephone','email'

    ];
}
