<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NonUserOrders extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'member_number', 'phone_number',
        'pin_number', 'street_address', 'city', 'state', 'zip',
        'card_number', 'expiration', 'security_code',
    ];
}
