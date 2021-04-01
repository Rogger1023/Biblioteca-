<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'birthday'
    ];

    public function employerBooks()
    {
        return $this->hasMany(Book::class, 'employer_id', 'id');
    }

    public function userBooks()
    {
        return $this->hasMany(Book::class, 'user_id', 'id');
    }
}
