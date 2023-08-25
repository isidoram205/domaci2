<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krema extends Model
{
    use HasFactory;

    protected $table = 'kreme';

    protected $fillable = [
        'naziv',
        'cena',
        'link',
        'tip',
        'user_id',
        'proizvodjac_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function proizvodjac(){
        return $this->belongsTo(Proizvodjac::class);
    }
}
