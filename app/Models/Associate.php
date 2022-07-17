<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associate extends Model
{
    protected $guarded=['id'];
    use HasFactory;
    public function Stand(){
        return $this->belongsTo(Stand::class);
    }
    public function Period(){
        return $this->belongsTo(Period::class);
    }

    public function Assistences(){
        return $this->hasMany(Assistence::class);
    }
    public function Families(){
        return $this->hasMany(Family::class);
    }

}
