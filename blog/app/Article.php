<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['penulis','judul','deskripsi','halaman','tahun'];
}
