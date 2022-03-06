<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'password_enc',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',        
        'phone_verified_at' => 'datetime',
    ];
}

// $table->string('username')->unique()->nullable();
// $table->string('alias')->unique()->nullable();
// $table->string('gender')->nullable();
// $table->timestamp('birth_date')->nullable();
// $table->string('about')->nullable();
// $table->tinyInteger('looking_for')->nullable();
// $table->string('personality_type')->nullable();

// $table->timestamps();