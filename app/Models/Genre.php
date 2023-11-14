<?php

namespace App\Models;

use App\Support\ScopeByName;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use ScopeByName;

    protected $fillable = ['name'];
}
