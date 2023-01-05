<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'nom',
        'description',
        'prix_unitaire',
        'quantité',
        'image',
        'created_at',
        'updated_at',
        'id_utilisateur',
        'id_category',
    ];
}
