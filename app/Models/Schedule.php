<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    
        protected $fillable = [
        'start_date',
        'end_date',
        'event_name',
        'user_id',
        ];
        
        
        public function user()
        {
            return $this->belongsTo(user::class);
        }
        
        // public function getByUser(int $limit_count = 5)
        // {
        //     return $this->schedules()->with('user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
        // }
        
}
