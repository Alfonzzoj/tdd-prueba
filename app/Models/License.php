<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $table = 'licences';

    use HasFactory;
    protected $fillable = [
        'nombre',
        'logo',
        'estado'
    ];

    public function items(){
        return $this->hasMany(Item::class);
    }
}
