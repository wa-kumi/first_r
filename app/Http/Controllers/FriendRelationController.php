<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FriendRequest;
use App\Models\FriendRelation;
use Illuminate\Support\Facades\Auth;

class FriendRelationController extends Controller
{
    
    public function addFriend(){
        return view('friends/add-friend');
    } 
    
    public function store(Request $request, FriendRelation $relation){
        $user_id = Auth::id();
        
        $input = $request['friend_relation'];
        $check_exist = $relation->checkExist($user_id, $input);
        // dd($check);
        
        if ($check_exist == true){
            $message = 'すでに保存されています';
        }else{
            $check_followed = $relation->checkFollowed($user_id, $input);
            if($check_followed == false){
                $relation['user_id'] = $user_id;
                $relation['mutual_flag'] = false;
                $relation->fill($input)->save();   
                $message = '保存しました';                
            }else{
                $relation['user_id'] = $user_id;
                $relation['mutual_flag'] = true;
                $relation->fill($input)->save();
                $followed = $relation->getFriendById($user_id, $input);
                
                $followed['mutual_flag'] = true;
                // dd($followed);
                $followed->save();
                $message="友達になりました";
            }
            

        }
        // dd($message);

        return redirect('/calendar')->with('msg', $message);
    }
    
    // public function store(Request $request, Schedule $schedule)
    // {
    //     $input = $request['schedule'];
    //     $schedule['user_id'] = Auth::id();
    //     $schedule->fill($input)->save();
    //     return redirect('/calendar/');
    // }
    
}
