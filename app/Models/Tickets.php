<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;\

    protected $fillable = [
        'customer',
        'subject',
        'priorty',
        'category',
        'status',
        'assignedto',
        'notes',
        'ticketno'

    ];


    protected $casts = [
        'updated_at' => 'datetime',
        'created_at' => 'datetime',
    ];

}
