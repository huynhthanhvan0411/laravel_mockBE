<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $table = 'divisions';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name','status'
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
}
