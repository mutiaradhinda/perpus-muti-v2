<?php
namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Exports\PenulisExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::latest()->paginate(5);

        return view('anggota.index',compact('anggota'));

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
        return view('anggota.create');
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
            'email' => 'required'

        ]);

        $input = $request->all();
  
        Anggota::create($input);
        toast('Data Berhasil Ditambahkan!', 'success');
        return redirect()->route('anggotas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        return view('anggota.show',compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggota $anggota)
    {
        return view('anggota.edit',compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggota)
    {
         $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'email' => 'required'

        ]);

        $input = $request->all();

        $anggota->update($input);
        toast('Data Berhasil Diedit!', 'success');
        return redirect()->route('anggotas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota)
    {
        $anggota->delete();
        toast('Data Berhasil Dihapus!', 'success');
        return redirect()->route('anggotas.index');
    }
}
