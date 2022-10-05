<?php
namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Exports\PenulisExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author = Author::latest()->paginate(5);

        return view('author.index',compact('author'));
    }

     public function pdf()
    {
        $author = Author::get();
 
        $pdf = PDF::loadview('author.author_pdf',['author'=>$author]);
        return $pdf->stream();
    }

    public function excel()
    {
        return Excel::download(new PenulisExport, 'penulis.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('author.create');
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
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required'

        ]);

         $input = $request->all();
  
    //     if ($image = $request->file('image')) {
    //         $destinationPath = 'image/';
    //         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    //         $image->move($destinationPath, $profileImage);
    //         $input['image'] = "$profileImage";
    // }

        Author::create($input);

        return redirect()->route('authors.index')
                        ->with('success','Created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        return view('author.show',compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        return view('author.edit',compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
         $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required'

        ]);

         $input = $request->all();
  
        // if ($image = $request->file('image')) {
        //     $destinationPath = 'image/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        // }else{
        //     unset($input['image']);
        // }

        $author->update($input);

        return redirect()->route('authors.index')
                        ->with('success','Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('authors.index')
                        ->with('success','Post deleted successfully');
    }
}
