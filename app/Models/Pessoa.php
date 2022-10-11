<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pessoa extends Model{
    protected $fillable = ['id', 'nome', 'sobrenome'];
    use HasFactory;

}
