<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(2);
        return view('books.index', compact('books'));
    }

   
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        try {
            $books = new Book();
            $books->name = $request->name;
            $books->ISBN = $request->ISBN;
            $books->author = $request->author;
            $books->category = $request->category;
            $books->pages = $request->pages;
            $books->year = $request->year;
            $books->save();
            return redirect()->route('book.index')->with('success', 'Thêm sách thành công.');
        } catch (\Exception ) {
            return redirect()->route('book.index')->with('error', 'Thêm sách thất bại');
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $books = Book::find($id);
        return view('books.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request,$id)
    {
        try{
        $books = Book::find($id);
        $books->name = $request->name;
        $books->ISBN = $request->ISBN;
        $books->author = $request->author;
        $books->category = $request->category;
        $books->pages = $request->pages;
        $books->year = $request->year;
        $books->save();
        return redirect()->route('book.index')->with('success', 'Cập nhật sách thành công.');
        }catch(\Exception ){
            return redirect()->route('book.index')->with('error', 'Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $books = Book::find($id);
        $books->delete();
        return redirect()->route('book.index'); 
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        if (!$search) {
            return redirect()->route('book.index');
        }
        $books = Book::where('name', 'LIKE', '%' . $search . '%')->paginate(5);
        return view('books.index', compact('books'));

    }
}
