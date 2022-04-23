<?php

namespace App\Models;

use App\Traits\Nanoids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Exchange extends Model
{
    use HasFactory, HasApiTokens, Notifiable, Nanoids;

    protected $fillable = [
        'exchange',
        'description',
        'is_active',
    ];
}
