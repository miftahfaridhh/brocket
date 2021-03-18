<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class turnamenMember extends Model
{ 
    use HasFactory;
    protected $table = 'turnamenMember';
    protected $fillable = ['turnamenId', 'userId','clubName','goldMedal','silverMedal','bronzeMedal','totalMedal'];
}
