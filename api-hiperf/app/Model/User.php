<?php

declare(strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 */
class User extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'users';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = ['name', 'email', 'password',];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = [];
}
