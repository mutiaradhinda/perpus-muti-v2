<?php
namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Book;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::with('book')->paginate(5);

        return view('peminjaman.index',compact('peminjaman'), [
            'title' => 'Peminjaman',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $b = Book::all();
        return view('peminjaman.create', compact('b'));
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
            // 'id_buku' => 'required',
            'anggota' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'denda' => 'required',
            'status' => 'required'

        ]);

         $input = $request->all();

        Peminjaman::create($input);

        return redirect()->route('peminjamen.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        return view('peminjaman.show',compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman)
    {
        $p = Peminjam::all();
        return view('peminjaman.edit',compact('p'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            // 'id_buku' => 'required',
            'anggota' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'denda' => 'required',
            'status' => 'required'
        ]);

        $input = $request->all();

        $peminjaman->update($input);

        return redirect()->route('peminjamen.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();

        return redirect()->route('peminjamen.index')
                        ->with('success','Post deleted successfully');
    }
}
