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
        //get current logged in user 
        $user = Auth::user();

        //get current user_id fom logged in user
        $user_id = $user->id;

        //get specific book
        $book_id = $request->book_id;

        //save request to database
        $q = new lend;
        $q->user_id = $user_id;
        $q->book_id = $book_id;

        $q->save();

        return redirect('/booklist')
        ->with('success','succes | Book lended');
}


public function LendHistory()
        {
                //get current user
                $user = Auth::user();
                $user_id = $user->id;

                //get lended books from specific user
                $history = DB::table('lends')

                // get books from book table via book_id in lend table
                ->join('books','lends.book_id','=','books.id')

                ->where('lends.user_id',$user_id)
                ->get();

                //return data to view
                return view('history', compact('history'));
        }
}
