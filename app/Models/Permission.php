<?php

namespace App\Models;

use App\Models\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
     protected $fillable = ['name', 'description'];

    public function toSearchableArray()
    {
        return [
            'id' =>$this->id,
            'description' => $this->description,
            // Exclude permissions here!
        ];
    }

    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class, 'group_permission');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
