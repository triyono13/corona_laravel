<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class corona extends Model
{
    protected $fillable = ['kode_provinsi','FID', 'provinsi', 'kasus_positif', 'sembuh', 'meninggal'];
    protected $table = 'corona';
    protected $primaryKey = 'FID';
}
