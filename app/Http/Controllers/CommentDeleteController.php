<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CommentDeleteController extends Controller
{
    public function index() {
        $comment = DB::select('select * from comments');
        return view('admin',['comment'=>$comment]);
    }
    public function destroy($id) {
        DB::delete('delete from comments where comment_id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/moderator-dashboard">Click Here</a> to go back.';
    }
}
