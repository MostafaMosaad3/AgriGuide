<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    use HasFactory;

    protected $guarded = [] ;

    public function soil(){
        return $this->belongsTo(Soil::class) ;
    }

    public function diseases(){
        return $this->belongsToMany(Disease::class) ;
    }
}
