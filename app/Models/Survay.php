<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survay extends Model
{
    use HasFactory;
    protected $table ="survey";
    protected $fillable=[
        "name",
        "email",
        "tel",
        "feedback",
    ];
}
