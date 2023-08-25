<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proizvodjac extends Model
{
    use HasFactory;

    protected $table = 'proizvodjaci';

    protected $fillable = [
        'imeProizvodjaca',
        'opis',
        'industrija_id',
    ];

    public function industrija(){
        return $this->belongsTo(Industrija::class);
    }

    public function krema(){
        return $this->hasMany(Krema::class);
    }
}
