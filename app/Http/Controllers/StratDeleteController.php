<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class StratDeleteController extends Controller
{
    public function index() {
        $strategy = DB::select('select * from strategies');
        return view('moderator',['strategy'=>$strategy]);
    }
    public function destroy($id) {
        DB::delete('delete from strategies where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/dashboard">Click Here</a> to go back.';
    }
}
