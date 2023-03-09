<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatble;
use Illuminate\Database\Eloquent\Model;

class UserdataModel extends Authenticatble
{
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'username', 'password', 'email', 'permission', 'status'];
}
?>