<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use auth;
use session;

class lend extends Model
{
    use HasFactory;

    public $table='lends';

    protected $fillable = ['user_id', 'book_id'];
    
}
