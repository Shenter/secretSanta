<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santa extends Model
{
    protected $fillable=['name','email','description'];
    use HasFactory;
}
