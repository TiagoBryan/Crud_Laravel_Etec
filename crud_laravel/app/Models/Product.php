<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Defina o nome da tabela se não seguir a convenção de pluralização
    protected $table = 'products';

    // Defina os campos que podem ser preenchidos em massa
    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    // Defina os campos que devem ser ocultados em arrays (opcional)
    protected $hidden = [];

    // Se você estiver usando timestamps, você pode definir como true ou false
    public $timestamps = true;

    // Caso a tabela não tenha timestamps, defina como false
    // public $timestamps = false;
}
