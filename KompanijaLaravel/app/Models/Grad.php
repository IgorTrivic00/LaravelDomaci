<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zaposleni;

class Grad extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'postanski_broj',
        'drzava'
    ];


    public function zaposleni(){
        return $this->hasMany(Zaposleni::class);
    }

}
