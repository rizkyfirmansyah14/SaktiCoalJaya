<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\BusinessScope;
use Illuminate\Http\Request;

class BusinessScopesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business = BusinessScope::all();
        return view('admin.business.index', compact('business'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.business.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'image' => 'required|file|image|mimes:jpeg,png,jpg,svg',
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('image');
 
		$nama_file = time()."_".$file->getClientOriginalName();

        $tujuan = 'uploads';
		$file->move($tujuan,$nama_file);

        BusinessScope::create([
            'title' => $request->title,
            'description1' => $request->description1,
            'description2' => $request->description2,
			'image' => $nama_file,
        ]);
        
        return redirect('/lingkupbisnis')->with('status','data successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Admin\BusinessScope  $businessScope
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessScope $businessScope)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Admin\BusinessScope  $businessScope
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessScope $lingkupbisni)
    {
        $bisnis = BusinessScope::find($lingkupbisni);
        return view('admin.business.edit', ['bisnis' => $bisnis]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Admin\BusinessScope  $businessScope
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessScope $lingkupbisni)
    {
        $lingkupbisni->title = $request->title;
        $lingkupbisni->description1 = $request->description1;
        $lingkupbisni->description2 = $request->description2;
       

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('uploads/'), $filename);
            $lingkupbisni->image = $request->file('image')->getClientOriginalName();
        }

        $lingkupbisni->update();

        return redirect()->route('lingkupbisnis.index')->with('status','data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Admin\BusinessScope  $businessScope
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessScope $lingkupbisni)
    {
        BusinessScope::destroy($lingkupbisni->id);
        return redirect('/lingkupbisnis')->with('status','data successfully deleted');
    }
}
