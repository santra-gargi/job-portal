<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companyauth extends Model
{
    use HasFactory;
    protected $table= "companyauths";
    protected $fillable = ['name','companyname','email','phoneno','password'];
}
