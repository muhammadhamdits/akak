<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $guarded = [];
    
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
