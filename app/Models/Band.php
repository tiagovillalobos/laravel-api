<?php

namespace App\Models;

use App\Support\ScopeByName;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{

    use ScopeByName;

    protected $fillable = ['name', 'country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
