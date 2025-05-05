<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrimaryWebsites extends Model
{
    use HasFactory;
    protected $table = 'primary_websites';
    protected $guarded  = [];
}
