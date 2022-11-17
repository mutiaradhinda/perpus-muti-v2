<?php
namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Exports\KategoriExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::latest()->paginate(5);

        return view('kategori.index',compact('kategori'),, [
            'title' => 'Kategori',
        ]);
    }

     public function kategori()
    {
        $kategori = Kategori::latest()->paginate(5);

        return view('kategori.index_anggota',compact('kategori'));
    }

    public function pdf()
    {
        $kategori = Kategori::get();
 
        $pdf = PDF::loadview('kategori.kategori_pdf',['kategori'=>$kategori]);
        return $pdf->stream();
    }
    public function excel()
    {
        return Excel::download(new KategoriExport, 'kategori.xlsx');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
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
            'kategori' => 'required',

        ]);

         $input = $request->all();
  
        Kategori::create($input);

        return redirect()->route('kategori.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        return view('kategori.show',compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        return view('kategori.edit',compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'kategori' => 'required|max:255',
            
        ]);

        $input = $request->all();
  

        $kategori->update($input);

        return redirect()->route('kategori.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        return redirect()->route('kategori.index')
                        ->with('success','Post deleted successfully');
    }
}
