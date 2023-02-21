<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('dashboard.admin.index', [
        //     'posts' => book::where('user_id', auth()->user()->id)->get()
        // ]);

        $Books = Book::latest()->paginate(5);

        return view('dashboard.admin.index', compact('Books'))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.admin.create', [
            'genre' => Genre::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateDate = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required',
            'isbn' => 'required',
            'author' => 'required',
            'genre_id' => 'required',
            'image' => 'image|file|max:1024',
            'sinopsis' => 'required'
        ]);


        if ($request->file('image')) {
            $validateDate['image'] = $request->file('image')->store('book-images');
        }

        $validateDate['user_id'] = auth()->user()->id;
        book::create($validateDate);

        return redirect('/dashboard')->with('berhasil', 'good job!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
        return view('dashboard.admin.show', [
            'Book' => $book,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
        return view('dashboard.admin.edit',[
            'book' => $book,
            'genre' => Genre::all(),
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
        $rules = ([
            'title' => 'required|max:255',
            // 'slug' => 'required',
            'isbn' => 'required',
            'author' => 'required',
            'genre_id' => 'required',
            'image' => 'image|file|max:1024',
            'sinopsis' => 'required'
        ]);
        
        // if ($request->slug != $book->slug) {
        //     $rules['slug'] = 'required|unique:book';
        // }

        $validateDate = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateDate['image'] = $request->file('image')->store('images');
        }

        $validateDate['user_id'] = auth()->user()->id;

        Book::where('id', $book->id)->update($validateDate);

        return redirect('/dashboard')->with('berhasil', 'Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
{
        //
        if ($book->image) {
            Storage::delete($book->image);
        }

        Book::destroy($book->id);
        return redirect('/dashboard')->with('berhasil', 'berhasil di hapus ');
    }

    public function Perpus(Book $book){
        return view('welcome', [
            'Book' => $book,
            'genre' => Genre::all(),

        ]);
    }

    public function user(){
        $users = User::latest()->paginate(5);

        return view('dashboard.admin.user', compact('users'))
        ->with('i', (request()->input('page', 1) -1 ) * 5);
    }

    public function cetak_pdf()
    {
        $book = Book::all();

        $pdf = PDF::loadview('pegawai_pdf', ['Book' => $book]);
        return $pdf->download('laporan-pegawai-pdf');
    }
}
