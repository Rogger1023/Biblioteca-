<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lend extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_lend',
        'book_lend',
        'date_lend'
    ];

    public function lendUser()
    {

    }

    public function lendBook()
    {

    }
}
