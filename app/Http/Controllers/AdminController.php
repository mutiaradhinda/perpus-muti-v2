<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Alert;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::with('role')->paginate(5);

        return view('admin.index',compact('admin'), [
            'title' => 'Admin',
        ]);

    }

    public function excel()
    {
        return Excel::download(new adminExport, 'admin.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $u = Role::all();
        return view('admin.create', compact('u'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request -> validate([
            'username' => 'required',
            'password' => 'required|min:5|max:255',
            // 'nama_admin' => 'required',
            // 'user_role' => 'required',

        ]);
         $validatedData['password'] = Hash::make($validatedData['password']);

         User::create($validatedData);

         $input = $request->all();

        User::create($input);
        toast('Created successfully!', 'success');
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(User $admin)
    {
        return view('admin.show',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(User $admin)
    {
        $u = Role::all();
        return view('admin.edit', compact('u'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $admin)
    {
         $request->validate([
            'username' => 'required',
            'password' => 'required',
            // 'nama_admin' => 'required',
            // 'user_role' => 'required',

        ]);

         $input = $request->all();
  
        $admin->update($input);
        toast('Update successfully!', 'success');
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $admin)
    {
        $admin->delete();
        toast('Delete successfully!', 'success');
        return redirect()->route('admin.index');
    }
}
