<?php

namespace App\Models\Plt;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = ['title', 'body'];
    protected $table = 'ArSys_Announcement';
}
