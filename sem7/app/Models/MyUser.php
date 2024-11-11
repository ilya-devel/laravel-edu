<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    /** @use HasFactory<\Database\Factories\MyUserFactory> */
    use HasFactory;
    public $fillable = ['name', 'surname', 'email'];
}
