<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boardmember extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'secondName',
        'email',
        'phone',
        'bio',
        'position',
        'link',
 
     ];
 
}
