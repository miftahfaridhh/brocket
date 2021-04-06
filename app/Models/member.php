<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{ 
    use HasFactory;
    protected $table = 'member';
    protected $fillable = ['turnamen_id','name','gold_medal','silver_medal','bronze_medal','total_medal'];
}
