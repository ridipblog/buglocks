<?php

namespace BugLock\rolePermissionModule\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable = [
        'name'
    ];
}
