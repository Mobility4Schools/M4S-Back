<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    public $table = 'marcas';
    public $fillable = ['m_nombre','m_status'];
}
