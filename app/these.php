<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class these extends Model
{
    protected $fillable = ['title', 'profsName', 'studentName', 'annee','description'];
}
