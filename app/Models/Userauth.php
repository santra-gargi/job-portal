<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userauth extends Model
{
    use HasFactory;
    protected $table= "userauths";
    protected $fillable = ['name','email','mobileno','qualification','passingyear','universityname','result','password'];
}
