<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserRegistrationAdminController extends Controller
{	
    public function index(Request $request)
    {	

    	//return view('ProductCRUD.create');

        $registeruser = \App\RegisterUser::orderBy('id','DESC')->paginate(5);
        return view('Admin.index',compact('registeruser'))->with('i', ($request->input('page', 1) - 1) * 5);
	}
    
    public function create()
    {
        return view('Admin.index');
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
            'lastname' => 'required',
        ]);
        \App\RegisterUser::create($request->all());
        //return view('UserRegistration.index');
        return redirect()->route('userRegistration.index')
                        ->with('success','User created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $product= \App\RegisterUser::find($id);
        /*echo '<pre>';
        print_r($product->toArray()); die;*/
        return view('UserRegistration.show',compact('product'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $product= \App\RegisterUser::find($id);
        return view('UserRegistration.edit',compact('product'));
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
        $this->validate($request, [
            'name' => 'required',
            'lastname' => 'required',
        ]);
        \App\RegisterUser::find($id)->update($request->all());
        return redirect()->route('userRegistration.index')
                        ->with('success','User updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\RegisterUser::find($id)->delete();
        return redirect()->route('userRegistration.index')
                        ->with('success','User deleted successfully');

    
    }

}
