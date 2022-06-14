<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'descripcion'];
    protected $guarded =[];

    
    protected $fillable = [
        'name',
        'descripcion',
        'slug'
    ];


    public function getRouteKeyName()
    {
        return 'slug';
    }
}
