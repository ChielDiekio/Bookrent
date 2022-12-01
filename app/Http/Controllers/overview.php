<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lend;
use DB;

class overview extends Controller
{
    public function getOverview()
    {
            $overview = DB::table('lends')
            ->orderby('name')
            ->join('users','lends.user_id','=','user_id')
            ->join('books','lends.user_id','=','books.id')
            ->get();

            //return data to view
            return view('overview', compact('overview'));
    }

}

