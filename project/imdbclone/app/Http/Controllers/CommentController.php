<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(/*Request $request*/)
    {
        $comments = Comment::get();
        return view('comment.index', ['comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create(Request $request)
    {
   
        return view('comment.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $request->validate([
            'body' => 'string|required|max:255',
            'user_id_fk' => 'required',
            'review_id_fk' => 'required'
        ]);

        $comment = new Comment;
        $comment->user_id_fk = $request->user_id_fk;
        $comment->review_id_fk = $request->review_id_fk;
        $comment->body = $request->body;
        $comment->save(); 
        return redirect()->back()->with('status', 'Your comment has been posted!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::find($id);
        return view('comment.create', ['comment' => $comment]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
  
        $comments = Comment::find($id);
        return view('comment.edit', ['comments' => $comments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   

            $request->validate([

            'body' => 'string|required|max:255',

            ]);

            $comment = Comment::find($id);
            $comment->body = $request->body;
            $comment->update();

            return redirect()->back()->with('status', 'Your comment has been updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //if(Comment::where('id', $id)->exists()){
        $comment = Comment::find($id);
        $comment->delete();

        return redirect()->back()->with('status', 'Your comment has been deleted!');
     // }
    }
}
