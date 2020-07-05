<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    protected $table = "artikel";

    public function users()
    {
        return $this->belongsTo('App\Models\UserModel', 'user_id');
    }
}
