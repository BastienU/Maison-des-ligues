<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\Authenticatable;
// use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Message extends Model
{
    // use BasicAuthenticatable;

    protected $fillable = ['utilisateur_id', 'contenu'];
}
