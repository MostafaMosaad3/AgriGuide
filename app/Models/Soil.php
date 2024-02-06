<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soil extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function crops(){
        return $this->hasMany(Crop::class);
    }

}

