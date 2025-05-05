<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CopyWriting extends Model
{
    use HasFactory;
    protected $table = 'copywritings';
    protected $guardded = [''];
}
