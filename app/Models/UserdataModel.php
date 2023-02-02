<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserdataModel extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'username', 'password', 'email', 'permission', 'status'];
}
