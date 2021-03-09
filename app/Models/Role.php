<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    Protected $guarded=[];

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class)->withTimestamps();
    }

    public function addPermission($permission)
    {
        if (is_string($permission)) {
            $role = Permission::whereName($permission)->firstOrFail();
        }
        $this->permissions()->sync($permission, false);
    }

}
