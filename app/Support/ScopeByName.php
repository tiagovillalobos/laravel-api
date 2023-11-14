<?php 

namespace App\Support;

trait ScopeByName
{
    public function scopeByName($query, $name)
    {
        return $query->where('name', $name);
    }

    public function scopeByNameLike($query, $name)
    {
        return $query->where('name', 'like', "%$name%");
    }
}