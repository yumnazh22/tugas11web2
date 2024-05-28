<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paramedik extends Model
{
    use HasFactory;
    protected $table = 'paramedik';
    protected $fillable = ['id','nama','tmp_lahir','tgl_lahir','gender','kategori','telpon','alamat','unit_kerja_id'];
}
