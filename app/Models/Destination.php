<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function aventure()
    {
        return $this->belongsTo(Aventure::class,'id');
    }
}
