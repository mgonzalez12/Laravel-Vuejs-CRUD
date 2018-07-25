<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thought extends Model
{
    
    protected $table = 'thoughts';

    protected $fillable = ['description','user_id'];
}