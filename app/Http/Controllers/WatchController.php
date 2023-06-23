<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watch; 
use App\Models\Comment; 
use App\Models\User;

class WatchController extends Controller
{
    public function index(Request $request) 
    {
      $watch_members = Watch::orderBy('id','desc')->paginate(8);
      
      return view('watch.index', [                     
              'watch_members' => $watch_members,
      ]);
    }
    
    public function show($id)
      {
        $watch_members = Watch::findOrFail($id);
        
        $comments = Comment::orderBy('id','desc')->get();
        
        $user_id = \Auth::id();
     
        return view('watch.show', [
            'watch_members' => $watch_members,
            'user_id' => $user_id,
            'comments' => $comments,
        ]);
      } 
      
    public function create($id)
      {
        $watch = new Watch;
        
        return view('watch.create',[
              'watch' => $watch,
        ]);
      }
      
    public function store(Request $request)
      {
        $watch = new Watch;
        
        $request->validate([
           'match_team' => 'required|max:50',
           'time' => 'required|max:50',
        ],
        [
           'match_team' => '対戦チームは必須です。',
           'time' => '試合開始時間は必須です。'
        ]);
  
        $watch->content = $request->content;
        $watch->match_team = $request->match_team;
        $watch->root_team = $request->root_team;
        $watch->user_id = \Auth::id();
        $watch->time = $request->time;
        
        $watch->save();
        
        return redirect('/watch');
      }
      
    public function destroy($id)
    {
        $watch_members = \App\Models\Watch::findOrFail($id);
        
        $watch_members->delete();
        
        return redirect('/watch');
    }
    
    public function edit($id)
    {
        $watch_members = Watch::findOrFail($id);
        
        return view('watch.edit',[
            'watch_members' => $watch_members,
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $watch = Watch::findOrFail($id);
        
        $request->validate([
           'match_team' => 'required|max:50',
           'time' => 'required|max:50',
        ],
        [
           'match_team' => '対戦チームは必須です。',
           'time' => '試合開始時間は必須です。'
        ]);
        
        $watch->content= $request->content;
        $watch->match_team= $request->match_team;
        $watch->root_team= $request->root_team;
        $watch->time= $request->time;
        $watch->user_id = \Auth::id();
        
        $watch->save();
        
        return redirect('/watch');
    }
}
