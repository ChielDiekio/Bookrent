<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\lend;
use DB;


class LendController extends Controller
{

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function LendBook(Request $request)
    {
        $user = Auth::user();

        $user_id = $user->id;
        $book_id = $request->book_id;

        $q = new lend;
        $q->user_id = $user_id;
        $q->book_id = $book_id;

        $q->save();

        return 'test';
}


public function LendHistory()
        {
                $user = Auth::user();
                $user_id = $user->id;


                $history = DB::table('lends')
                ->join('books','lends.book_id','=','books.id')
                ->where('lends.user_id',$user_id)
                ->get();

                return view('history', compact('history'));

        }
}
