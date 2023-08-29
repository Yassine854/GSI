<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'client_id',
        'product_id',
        'designation',
        'ref',
        'quantite',
        'description',
        'date'
    ];
}