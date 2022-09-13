<?php
namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pengguna::latest()->paginate(5);

        return view('pengguna.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengguna.create');
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
            'username' => 'required|max:255',
            'akses_token' => 'required',
            // 'id_user_role' => 'required',
            // 'id_anggota' => 'required',
            'password' => 'required',
            // 'id_admin' => 'required',
            // 'id_petugas' => 'required',

        ]);

        $input = $request->all();
  
        Pengguna::create($input);

        return redirect()->route('penggunas.index')
                         ->with('success','Created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $pengguna)
    {
        return view('pengguna.show',compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengguna $pengguna)
    {
        return view('pengguna.edit',compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengguna $pengguna)
    {
         $request->validate([
            'username' => 'required|max:255',
            'akses_token' => 'required',
            // 'id_user_role' => 'required',
            // 'id_anggota' => 'required',
            'password' => 'required',
            // 'id_admin' => 'required',
            // 'id_petugas' => 'required'

        ]);

        $input = $request->all();
  
        $pengguna->update($input);

        return redirect()->route('penggunas.index')
                         ->with('success','Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengguna $pengguna)
    {
        $pengguna->delete();

        return redirect()->route('penggunas.index')
                         ->with('success','Post deleted successfully');
    }
}
