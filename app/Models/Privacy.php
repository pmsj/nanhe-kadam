<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Privacy extends Model
{
    protected $fillable = [
        'title',
        'content',
        'is_active',
    ];

     public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function updatedAt()
    {
        // Format like: June 4
        return \Carbon\Carbon::parse($this->updated_at)->format('F j, Y');
    }

        public function updatedAtHumanReadableTime()
    {
        return $this->updated_at->diffForHumans();
    }

}
