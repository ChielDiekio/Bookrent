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
        // get latest books from database with max 5 items per page.
        $books = book::latest()->paginate(5);

        // sends data to view with max 5 books.
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
        // get latest books from data base
        $books = book::latest();

        // if request got search value
        if (request()->has('search')) {

            // then...

            // searches title from book by entered term in input
            $books ->where('title', 'Like', '%' . request()->input('search') . '%');
        }
        
        // sends data to view with max 5 books.
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

        // create unique Isbn
        $isbn = Helper::IDGenerator(new book, 'isbn', 5, 'isbn');

        $title = $request->title;
        $author = $request->author;
        $edition = $request->edition;

        //saves information as new book
        $q = new book;
        $q->isbn = $isbn;
        $q->title = $title;
        $q->author = $author;
        $q->edition = $edition;
        $q->save();

        // returns to booklist with succes message.
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
        // get latest books from database with max 5 items per page.
        $books = book::latest()->paginate(5);

        // sends data to view with max 5 books.        
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
            //deletes specific book
            $book->delete();

        return redirect('/addbook')
            ->with('success','Book deleted');

    }
}
