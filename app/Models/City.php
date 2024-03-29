<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $table = 'city';

    protected $fillable = [
       'id', 'name', 'population'
    ];
    use HasFactory;
}
