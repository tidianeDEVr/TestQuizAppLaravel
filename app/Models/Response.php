<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);
    }

    protected $fillable = [
        'user_id',
        'first_choice',
        'second_choice',
        'third_choice',
        'fourth_choice',
        'fifth_choice',
        'sixth_choice',
        'seventh_choice',
        'eighth_choice',
        'nineth_choice',
        'tenth_choice',
    ];
}
