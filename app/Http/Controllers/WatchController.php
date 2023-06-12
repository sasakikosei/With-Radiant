<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watch; 

class WatchController extends Controller
{
    public function index(Request $request) 
    {
      $watch_members = Watch::orderBy('id','desc')->paginate(10);
      
      return view('watch.index', [                     
              'watch_members' => $watch_members,
      ]);
    }
    
    public function show($id)
      {
        
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
        $watch = new Recruit;
        $watch->content = $request->content;
        $watch->save();
        
        return back();
      }
}
