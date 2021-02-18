<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Support\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = auth()->user()->books()->get();
        return view('user.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
      
        return view('user.books.create', compact('genres'));// compact('genres') pass genres to view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(StoreBookRequest $request)  //validation in form request files
    {
        //if validation is ok, next step

        //is using has many ralationshiop //auth()->user() is user model of logged user // then using books() relationship and making create
        $book = auth()->user()->books()->create($request->validated()); 
        //genres come as array and making attach with many to many realationship
        $book->genres()->attach($request->input('genres'));
        //authors are comma separated
        //foreaching are doing for every author 
        $authors = explode(",", $request->input('authors')); //every author will be in array
        foreach ($authors as $authorName) {
            $author = Author::updateOrCreate(['name' => $authorName]); //make author // updateOrCreate is Eloquent function which updating existing author or create new one and when book is attach to author 
            $book->authors()->attach($author->id); //author attached to books
        }
        $slug = Str::of($request->title)->slug('-');

        return redirect()->route('user.books.index')->with('message', 'Book created succefully'); //session massage in blade

        Book::insert(['slug' => Str::of($request->title)->slug('-')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
