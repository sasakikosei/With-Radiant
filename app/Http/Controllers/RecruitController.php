<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruit; 

class RecruitController extends Controller
{
    public function index(Request $request) 
    {
      $query = Recruit::query();
      
      $purpose = $request->input('purpose');
      
      if(!empty($gender)) {
            $query->where('gender', 'LIKE', $gender);
      }
      
      $recruit_members = Recruit::orderBy('id','desc')->paginate(3);
      
      return view('recruit.index', [                     
              'recruit_members' => $recruit_members,
              'purpose' => $purpose,
      ]);
    }
  
    public function show($id)
      {
        
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
        $recruit->save();
        
        return back();
      }
    
}
