<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'user_id', 'non_user_id', 'item_number', 'description', 'quantity',
        ];

        public function checkUserId($id) 
        {
            $userId = $this->select('user_id')->where('id', $id)->first();
            return $userId->user_id;
        }

        public function checkNonUserId($id)
        {
            $userId = $this->select('non_user_id')->where('id', $id)->first();
            return $userId->non_user_id;
        }

}
