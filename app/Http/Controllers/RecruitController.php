<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruit; 
use App\Models\Comment; 

class RecruitController extends Controller
{
    public function index(Request $request) 
    {
      $query = Recruit::query();
      
      $purpose = $request->input('purpose');
      
      if(!empty($purpose)) {
            $query->where('purpose', 'LIKE', $purpose);
      }
      
      $recruit_members = $query->orderBy('id','desc')->paginate(10);
      
      return view('recruit.index', [
              'recruit_members' => $recruit_members,
              'purpose' => $purpose,
      ]);
    }
  
    public function show($id)
      {
        $recruit_members = Recruit::findOrFail($id);
        
        $comments = Comment::orderBy('id','desc')->get();
        
        $user_id = \Auth::id();
     
        return view('recruit.show', [
            'recruit_members' => $recruit_members,
            'user_id' => $user_id,
            'comments' => $comments
        ]);
      } 
      
    public function create($id)
      {
        $recruit = new Recruit;
        
        return view('recruit.create',[
              'recruit' => $recruit,
        ]);
      }
      
    public function store(Request $request)
      {
        $recruit = new Recruit;
        
        $recruit->purpose = $request->purpose;
        $recruit->content = $request->content;
        $recruit->rank = $request->rank;
        $recruit->user_id = \Auth::id();
        
        $recruit->save();
        
        $purpose = $request->input('purpose');
        
        return view('recruit.index',[
              'purpose' => $purpose,
        ]);
      }
    
    public function destroy($id)
    {
        $recruit_members = \App\Models\Recruit::findOrFail($id);
    
        $recruit_members->delete();
        
        return redirect('/recruit');
    }
    
    public function edit($id)
    {
        $recruit_members = Recruit::findOrFail($id);
        
        return view('recruit.edit',[
            'recruit_members' => $recruit_members
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $recruit = Recruit::findOrFail($id);
        
        $recruit->purpose= $request->purpose;
        $recruit->content= $request->content;
        $recruit->rank= $request->rank;
        $recruit->user_id = \Auth::id();
        
        $recruit->save();
        
        return redirect('/recruit');
    }
    
}
