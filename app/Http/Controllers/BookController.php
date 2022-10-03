<?php
namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Kategori;
use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Exports\BukuExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::with('author', 'publisher', 'kategori')->paginate(2);

        return view('book.index', compact('book'));


    }

    public function jumlahdata()
    {
        $count = Book::where('status','=','1')->count();
    }
    
    public function pdf()
    {
        $book = Book::get();
 
        $pdf = PDF::loadview('book.buku_pdf',['book'=>$book]);
        return $pdf->stream();
    }

     public function excel()
    {
        return Excel::download(new BukuExport, 'buku.xlsx');
    }
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $k = Kategori::all();
        $a = Author::all();
        $p = Publisher::all();
        return view('book.create',compact('k', 'a', 'p'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'nama' => 'required|max:255',
            'tahun_terbit' => 'required',
            // 'id_penulis' => 'required',
            // 'id_penerbit' => 'required',
            // 'id_kategori' => 'required',
            'sinopsis' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

         $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
    }

        Book::create($input);

        return redirect()->route('book.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('book.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $k = Kategori::all();
        $a = Author::all();
        $p = Publisher::all();
        return view('book.edit',compact('k', 'a', 'p'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'tahun_terbit' => 'required',
            // 'id_penulis' => 'required',
            // 'id_penerbit' => 'required',
            // 'id_kategori' => 'required',
            'sinopsis' => 'required',
        ]);

        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $book->update($input);

        return redirect()->route('book.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('book.index')
                        ->with('success','Post deleted successfully');
    }

    public function singlePost($image)
{
   $book = Book::find($image); 
   $images = $book->images()->get(); 

   $bookObj = [
      'id' => $book->id,  
      'title' => $book->title, 
      'body' => $book->body
   ];

   foreach ($images as $image) {
      $arrImages[] = [
         'id' => $image->id, 
         'url' => $image->url,       
      ];
   }; 

   $res = array_merge($bookObj, ['images' => $arrImages]);

   return response()->json(['book' => $res]); 
}

}
