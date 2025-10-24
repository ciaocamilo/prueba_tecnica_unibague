<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contract extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    //
    protected $fillable = [
        'id',
        'title',
        'contractor_name',
        'status',
        'amount',
        'start_date',
        'end_date',
        'created_at',
        'updated_at'
    ];
}
