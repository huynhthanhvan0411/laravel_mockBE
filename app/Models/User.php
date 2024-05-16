<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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
     * @var array<int, string>
     */
    protected $fillable = [
        'code_employee',
        'name',
        'email',
        'role_id',
        'division_id',
        'position_id',
        'birthday',
        'gender',
        'avatar',
        'phone',
        'address',
        'password',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',

    ];
    public function role()
    {
        return $this->hasMany(Role::class);
    }
    public function position(){
        return $this->belongsTo(Position::class);
    }
    public function division(){
        return $this->belongsTo(Division::class);
    }
    public function attendances(){
        return $this->hasMany(Attendance::class);
    }
}
