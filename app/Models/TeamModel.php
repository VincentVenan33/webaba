<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamModel extends Model
{
    use HasFactory;
    protected $table = 'team';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'jabatan', 'deskripsi', 'linkedin', 'facebook', 'instagram', 'keterangan', 'status'];
}
?>