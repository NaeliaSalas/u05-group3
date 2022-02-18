<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

/*     protected $table = 'comments';
    protected $fillable = ['body']; */


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(/*Request $request*/)
    {
        $comments = Comment::get();
        return view('comment.index_comment', ['comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create(Request $request)
    {
   
        return view('comment.create_comment');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->user_id_fk = $request->user_id_fk;
        $comment->review_id_fk = $request->review_id_fk;
        $comment->body = $request->body;
        $comment->save(); 
        //return redirect()->back()->with('status', 'Your comment has been posted!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('comment.edit_comment');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);
        return view('comment.edit_comment', ['comments' => $comment] );
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
            $comment = Comment::find($id);
            $comment->body = is_null($request->body) ? $comment->body : $request->body; 
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
      if(Comment::where('id', $id)->exists()){
        $comment = Comment::find($id);
        $comment->delete();

        return redirect()->back()->with('status', 'Your comment has been deleted!');
      }
    }
}
