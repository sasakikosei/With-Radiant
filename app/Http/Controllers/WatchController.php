<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watch; 

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
        
        $user_id = \Auth::id();
     
        return view('watch.show', [
            'watch_members' => $watch_members,
            'user_id' => $user_id
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
        ]);
            
        $watch->content = $request->content;
        $watch->match_team = $request->match_team;
        $watch->root_team = $request->root_team;
        $watch->user_id = \Auth::id();
        $watch->time = $request->time;
        
        $watch->save();
        
        return view('watch.index');
      }
      
    public function destroy($id)
    {
        $watch_members = \App\Models\Watch::findOrFail($id);
        
        $watch_members->delete();
        
        return redirect('/watch');
    }
    
    public function edit($id)
    {
        $watch = Watch::findOrFail($id);
        
        return view('watch.edit',[
            'watch' => $watch,
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $watch = Watch::findOrFail($id);
        
        $watch->content= $request->content;
        $watch->match_team= $request->match_team;
        $watch->root_team= $request->root_team;
        $watch->time= $request->time;
        $watch->user_id = \Auth::id();
        
        $watch->save();
        
        return back();
    }
}
