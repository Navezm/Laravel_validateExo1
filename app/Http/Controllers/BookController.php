<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        $total = 0;
        return view('welcome', compact('books', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:1|max:20',
            'text' => 'required|max:300',
            'grade' => 'required|gt:0|lt:6'
        ]);
        
        $newEntry = new Book;
        $newEntry->name = $request->name;
        $newEntry->text = $request->text;
        $newEntry->grade = $request->grade;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Book::find($id);
        return view('pages.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show = Book::find($id);
        return view('pages.edit', compact('show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'text' => 'required',
            'grade' => 'required|gt:0|lt:6'
        ]);

        $updateEntry = Book::find($id);
        $updateEntry->name = $request->name;
        $updateEntry->text = $request->text;
        $updateEntry->grade = $request->grade;
        $updateEntry->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Book::find($id);
        $destroy->delete();
        return redirect('/');
    }
}
