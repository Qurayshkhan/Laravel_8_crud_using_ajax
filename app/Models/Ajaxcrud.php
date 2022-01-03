<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ajaxcrud extends Model
{
    use HasFactory;
    protected $fillable=array('name','email','post','comment');
}
