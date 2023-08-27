<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'due_at',
    ];

    protected $casts = [
        'due_at' => 'datetime',
    ];
}
