<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment; 

class CommentController extends Controller
{
    
    public function index()
    {
        $comments = Comment::orderBy('id','desc');
        
        return view('recruit.show', [
              'comments' => $comments,
      ]);
        
    }
    public function store(Request $request)
   {
       $comment = new Comment();
       
       $request->validate([
            'comment' => 'required|max:50',
        ]);
       
       $comment->comment = $request->comment;
       $comment->recruit_id = $request->recruit_id;
       $comment->watch_id = $request->watch_id;
       $comment->user_id = \Auth::user()->id;
       $comment->save();
       
       return back();
   }

    public function destroy($id)
    {
        $comments = \App\Models\Comment::findOrFail($id);
        
        $comments->delete();
        
        return back();
        
    }
}
