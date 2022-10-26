<?php
namespace App\Http\Controllers;

use App\Models\Semua;
use Illuminate\Http\Request;
use Alert;
use Maatwebsite\Excel\Facades\Excel;

class SemuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semua = Semua::latest()->paginate(5);

        return view('semua.index',compact('semua'));

    }

    public function excel()
    {
        return Excel::download(new semuaExport, 'semua.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('semua.create');
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
            'username' => 'required',
            'user_role' => 'required',

        ]);

         $input = $request->all();

        Semua::create($input);
        toast('Created successfully!', 'success');
        return redirect()->route('semua.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Semua $semua)
    {
        return view('semua.show',compact('semua'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Semua $semua)
    {
        return view('semua.edit',compact('semua'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Semua $semua)
    {
         $request->validate([
            'nama' => 'required|max:255',
            'username' => 'required',
            'user_role' => 'required',


        ]);

         $input = $request->all();
  
        $semua->update($input);
        toast('Update successfully!', 'success');
        return redirect()->route('semua.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semua $semua)
    {
        $semua->delete();
        toast('Delete successfully!', 'success');
        return redirect()->route('semua.index');
    }
}
