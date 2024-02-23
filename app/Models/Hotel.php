<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'address',
        'contact_1',
        'contact_2',
        'type',
        'web_site',
        'city',
        'check_in_date',
        'check_out_date',
        'description',
        'hotel_type_id'
    ];
}
