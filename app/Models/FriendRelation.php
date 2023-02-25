<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendRelation extends Model
{
    use HasFactory;
    
    
        protected $fillable = [
        'user_id',
        'following_user_id',
        'mutual_flag'
        ];
        
        

        public function checkExist($user_id, $input)
        {
            $check = $this->where('user_id', $user_id)->where('following_user_id', $input)->first();
            if (!$check){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }
        
        public function checkFollowed($user_id, $input)
        {
            $check = $this->where('user_id', $input)->where('following_user_id', $user_id)->first();
            if (!$check){
                $result = false;
            }else{
                $result = true;
            }
            return $result;
        }
        
        public function getFriendById($user_id, $input)
        {
            return $this->where('user_id', $input)->where('following_user_id', $user_id)->first();
        }
        
        
        // public function user()
        // {
        //     return $this->belongsTo(user::class);
        // }
}
