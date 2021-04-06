<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class turnamen extends Model
{
    use HasFactory;
    protected $table = 'turnamen';
    protected $fillable = ['user_id','name','total_member','date_start','date_end','description'];
}
