<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB; //DBファサード

class TestController extends Controller
{
    public function index(){
        $values = Test::all();
        return view('tests.test',compact('values'));
    }

    //エロクアント
    public function index2(){
    $values = Test::all();

    $cnt = Test::count();

    $first = Test::findOrFail(1);

    $where = Test::where('text', '=', 'bbb');


    //クエリビルダ
    $query = DB::table('tests')->where('text', '=', 'bbb')
    ->select('id', 'text')
    ->get();

    //dd($values, $cnt ,$first, $where, $query);

    return view('tests.test',compact('values'));
    }
}







































































































































































































































































