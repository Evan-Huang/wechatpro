<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    //
	//
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $records = User::orderBy('created_at', 'ASC')->paginate(30);

        return view('backend.user.index')->with('records', $records);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    	$inputs = \Request::all();

    	$validator = \Validator::make($inputs, [
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required'
    	]);

    	if( $validator->fails() ) {
    		return \Redirect::action('Backend\UserController@create')->withInput($inputs)->withErrors($validator);
    	}

    	$user = new User;
    	$user->name = $inputs['name'];
    	$user->email = $inputs['email'];
    	$user->password = \Hash::make($inputs['password']);

    	$user->save();

    	return \Redirect::action('Backend\UserController@edit', [$user->id])->with('success', true);
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
        //
    	$user = User::find($id);

    	if( !$user ) {
    		return \App::abort(404);
    	}

    	return view('backend.user.edit')->with('record', $user);
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
        //

        $user = User::find($id);

    	if( !$user ) {
    		return \App::abort(404);
    	}

    	$inputs = \Request::all();

    	$validator = \Validator::make($inputs, [
    		'name' => 'required',
    		'email' => 'required|email',
    	]);

    	if( $validator->fails() ) {
    		return \Redirect::action('Backend\UserController@edit', [$id])->withInput($inputs)->withErrors($validator);
    	}

    	$user->name = $inputs['name'];
    	$user->email = $inputs['email'];
    	if( $inputs['password'] != '' ) $user->password = \Hash::make($inputs['password']);

    	$user->save();

    	return \Redirect::action('Backend\UserController@edit', [$user->id])->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
