<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class words extends Model
{
    use HasFactory;
    protected $table = 'words';
    protected $fillable = ['word','meaning'];
}
