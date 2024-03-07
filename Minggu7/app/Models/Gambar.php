<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Gambar extends Model
{
    protected $table = "gambar";
 
    protected $fillable = ['file','keterangan'];
}