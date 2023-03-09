<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KatalogModel extends Model
{
    use HasFactory;
    protected $table = 'katalog';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'keterangan', 'image', 'file', 'status'];
}
?>