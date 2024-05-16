<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes; 
    protected $table = 'roles';
    protected $primaryKey = 'id';
    public $timestamps =true; 

    protected $fillable = [
        'name',
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
