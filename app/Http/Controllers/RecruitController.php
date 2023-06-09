<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruit; 

class RecruitController extends Controller
{
    public function index() 
  {
    $recruit_members = Recruit::orderBy('id','desc')->paginate(10);
        
        
    return redirect('/');
  }
  
  public function show($id)
    {
      
    }   
}
