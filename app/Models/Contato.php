<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model {
    
    // Sem esta linha, não é possível usar o método create
    protected $fillable = ['name', 'email', 'subject', 'message'];
}