<?php
namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;
use PDF;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publisher = Publisher::latest()->paginate(5);

        return view('publisher.index',compact('publisher'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function pdf()
    {
        $publisher = Publisher::get();
 
        $pdf = PDF::loadview('publisher.publisher_pdf',['publisher'=>$publisher]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publisher.create');
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

        Publisher::create($input);

        return redirect()->route('publishers.index')
                        ->with('success','Created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Publisher $publisher)
    {
        return view('publisher.show',compact('publisher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Publisher $publisher)
    {
        return view('publisher.edit',compact('publisher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publisher $publisher)
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

        $publisher->update($input);

        return redirect()->route('publishers.index')
                        ->with('success','Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publisher $publisher)
    {
        $publisher->delete();

        return redirect()->route('publishers.index')
                        ->with('success','Deleted successfully');
    }
}
