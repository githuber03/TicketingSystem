<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// calling modal User.php in Controller PostController
use App\Share; 
use Session;

class ShareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $shares = Share::all();

        return view('share.index', compact('shares'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	   return view('share.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
      $share = new Share();

      $share->share_ticket = $request->input('share_ticket');
      $share->share_name = $request->input('share_name');
      $share->share_department = $request->input('share_department');
      $share->share_priority = $request->input('share_priority');
  

      $share->save();

      Session::flash('success','Record Successfully Recorded');

      return redirect()->route('share.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $share = Share::find($id);

        return view('share.edit', compact('share'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $share = Share::find($id);

      $share->share_ticket = $request->input('share_ticket');
      $share->share_name = $request->input('share_name');
      $share->share_department = $request->input('share_department');
      $share->share_priority = $request->input('share_priority');
  

      $share->save();

      return redirect('/share')->with('success', 'Information has been updated');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $share = Share::find($id);
        $share->delete();

        return redirect('/share')->with('success', 'Information has been deleted Successfully');
    }
}
