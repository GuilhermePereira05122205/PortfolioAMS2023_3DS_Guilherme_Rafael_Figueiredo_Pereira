<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arquivo extends Model
{
    use HasFactory;

    protected $table = 'Arquivo';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_mensagem',
        'id_tipomensagem',
        'Arquivo'
    ];

}
