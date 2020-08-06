<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public const ADMIN_ID = 1, EMPLOYEE_ID = 2, OWNER_ID = 3;
    protected $fillable = [
        'name'
    ];
}
