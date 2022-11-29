<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Helpers\Helper;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $books = book::latest()->paginate(5);

        return view('Addbook', compact('books'))
            ->with('i',(request()->input('page',1) - 1) * 5);



    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $books = book::latest();
        if (request()->has('search')) {
            $books ->where('title', 'Like', '%' . request()->input('search') . '%');
        }
        $books = $books->paginate(5);
        return view('booklist',compact('books'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $isbn = Helper::IDGenerator(new book, 'isbn', 5, 'isbn');
        $title = $request->title;
        $author = $request->author;
        $edition = $request->edition;

        $q = new book;
        $q->isbn = $isbn;
        $q->title = $title;
        $q->author = $author;
        $q->edition = $edition;
        $q->save();

        return redirect('/addbook')
            ->with('success','Book added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $books = book::latest()->paginate(5);

        return view('Booklist', compact('books'))->with('i',(request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
            $book->delete();

        return redirect('/addbook')
            ->with('success','Book deleted');

    }
}
