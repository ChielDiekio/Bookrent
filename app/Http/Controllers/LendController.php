<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\lend;


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
}
