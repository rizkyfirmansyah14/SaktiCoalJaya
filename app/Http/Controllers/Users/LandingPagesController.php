<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Model\Users\LandingPage;
use App\Model\Admin\BusinessScope;
use Illuminate\Http\Request;

class LandingPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bisnis = BusinessScope::all();
        return view('user.index', compact('bisnis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
       
        LandingPage::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect('/')->with('status','Message sent successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Users\LandingPage  $landingPage
     * @return \Illuminate\Http\Response
     */
    public function show(LandingPage $landingPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Users\LandingPage  $landingPage
     * @return \Illuminate\Http\Response
     */
    public function edit(LandingPage $landingPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Users\LandingPage  $landingPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LandingPage $landingPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Users\LandingPage  $landingPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandingPage $landingPage)
    {
        //
    }
}
