<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leptop extends Model
{
    use HasFactory;

    protected $fillable =[
        'camboard_id',
        'nama',
        'warna_leptop',
        'description'


    ];
    public function cupboard()
    {
        return $this->hasOne(Cupboard::class, 'id', 'cupboard_id');
    }
}
