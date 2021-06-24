<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
    ];
    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
