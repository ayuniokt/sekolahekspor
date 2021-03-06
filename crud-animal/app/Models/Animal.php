<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable =[
        'cage_id',
        'nama',
        'umur',
        'description'


    ];
    public function cage()
    {
        return $this->hasOne(Cage::class, 'id', 'cage_id');
    }
}
