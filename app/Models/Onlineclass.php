<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onlineclass extends Model
{
    protected $table = 'onlineclass';
    protected $fillable = ['nama','usia','email','pekerjaan','kategori_kelas','kelas'];
}
