<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainModel extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $fillable = ['username','password','email','fullname','address','phone','money','position','age'];
}
