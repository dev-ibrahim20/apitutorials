<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'Categories';
    protected $fillable = ['name_ar', 'name_en'];
    protected $hidden = ['created_at', 'updated_at'];
    public $timeStamps = false;
}
