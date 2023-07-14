<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    use HasFactory;
    protected $fillable = [
        'empresa',
        'razon_social',
        'direccion',
        'rfc',
        'path_logo',
        'path_header',
        'path_footer',
        'prefijo'
    ];
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
