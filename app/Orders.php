<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use Notifiable;
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'user_id', 'non_user_id', 'item_number', 'description', 'quantity',
        ];

}
