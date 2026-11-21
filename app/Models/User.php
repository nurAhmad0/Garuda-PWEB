<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public const ROLES = ['klien', 'developer', 'admin'];
    public const SELF_ROLES = ['klien', 'developer'];
    public const UPDATED_AT = null;
    protected $table = 'users';
    protected $fillable = ['nama', 'email', 'password', 'role'];
    protected $hidden = ['password'];
    public function getRememberTokenName(): string
    {
        return '';
    }
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class, 'client_id');
    }
    public function bids(): HasMany
    {
        return $this->hasMany(Bid::class, 'developer_id');
    }
}
