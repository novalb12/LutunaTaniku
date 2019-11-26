<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'product';
    protected $fillable = ['imgfile','productname','description','username'];

}
