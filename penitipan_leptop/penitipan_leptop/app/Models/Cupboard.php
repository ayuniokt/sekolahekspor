<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupboard extends Model
{
    use HasFactory;

    protected $fillable =[
        'namaCupboard',
        'description'


    ];
    public function leptops()
    {
        return $this->hasMany(Leptop::class, 'cupboard_id', 'id');
    }
}
