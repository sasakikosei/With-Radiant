<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;                        
use App\Models\User; 

class UsersController extends Controller
{
    public function index(Request $request)                                     
    {
        $query = User::query();
        
        $name = $request->input('name');
        
        $gender = $request->input('gender');
        
        $rank = $request->input('rank');
        
        if(!empty($name))
        {
           $query->where('name','like','%'.$name.'%');
        }
        
        if(!empty($gender)) {
            $query->where('gender', 'LIKE', $gender);
        }
        
        if(!empty($rank)) {
            $query->where('rank', 'LIKE', $rank);
        }
        
        $users = $query->orderBy('id','desc')->paginate(10);
        
        return view('users.index', [                        
            'users' => $users,
            'name' => $name,
            'gender' => $gender,
            'rank' => $rank,
        ]);                                                 
    }                                                       
    
    public function show($id)                               
    {
        $user = User::findOrFail($id);
        
        return view('users.show', [
            'user' => $user,
        ]);
    }  
    
    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        return view('users.edit',[
            'user' => $user,
        ]);
    }
    
    public function showMypage($id)                               
    {
        $user = User::findOrFail($id);
     
        return view('users.mypage', [
            'user' => $user,
        ]);
    }  
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
        ]);
        
        $user = new User;
        $user->name= $request->name;
        $user->discord_id= $request->discord_id;
        $user->game_id= $request->game_id;
        $user->rank= $request->rank;
        $user->character= $request->character;
        $user->wepon= $request->wepon;
        $user->play_time= $request->play_time;
        $user->valo_time= $request->valo_time;
        $user->favorite_team= $request->favorite_team;
        $user->introduction= $request->introduction;
        
        
        $user->save();
        
        return view('users.mypage', [
            'user' => $user,
            'discord_id' => $discord_id,
            'game_id' => $game_id,
            'rank' => $rank,
            'character' => $character,
            'wepon' => $wepon,
            'play_time' => $play_time,
            'valo_time' => $valo_time,
            'favorite_team' => $favorite_team,
            'introduction' => $introduction,
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:20',
            ]);
        $user = User::findOrFail($id);
        
        $user->name= $request->name;
        $user->discord_id= $request->discord_id;
        $user->game_id= $request->game_id;
        $user->rank= $request->rank;
        $user->character= $request->character;
        $user->wepon= $request->wepon;
        $user->play_time= $request->play_time;
        $user->valo_time= $request->valo_time;
        $user->favorite_team= $request->favorite_team;
        $user->introduction= $request->introduction;
        $user->gender= $request->gender;
        $user->play_hc= $request->play_hc;
        $user->play_style= $request->play_style;
        
        
        $user->save();
        
        return view('users.mypage', [
            'user' => $user,
        ]);
    }
    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        
        $user->delete();
        
        return redirect('/');
    }
}
