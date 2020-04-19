<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indonesia extends Model
{
    protected $fillable = ['name','positif', 'sembuh', 'meninggal'];
    protected $table = 'corona_indonesia';
}
