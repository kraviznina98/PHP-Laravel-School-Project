<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;    public $timestamps = false;

    protected $fillable = ['naslov', 'opis', 'trajanje', 'rejting','reziser','poster', 'zanr_id'];

}
