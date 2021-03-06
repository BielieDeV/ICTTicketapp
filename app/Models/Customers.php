<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customers extends Model
{

//use Sortable;

    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'cellnumber',
        'custnumber',
        'SLA',
    ];


    protected $casts = [
        'updated_at' => 'datetime',
        'created_at' => 'datetime',
    ];
}
