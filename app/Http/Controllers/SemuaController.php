<?php
namespace App\Http\Controllers;

use App\Models\Semua;
use App\Models\Role;
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
        $semua = Semua::with('role')->paginate(5);

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
        $r = Role::all();
        return view('semua.create', compact('r'));
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
            'username' => 'required',
             'password' => 'required',
             // 'nama_admin' => 'required',
            // 'user_role' => 'required',

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
        $r = Role::all();
        return view('semua.edit',compact('r'));
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
            'username' => 'required',
             'password' => 'required',
             // 'nama_admin' => 'required',
            // 'user_role' => 'required',


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
