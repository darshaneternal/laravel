<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserRegistrationController extends Controller
{	
    public function index(Request $request)
    {	

    	//return view('ProductCRUD.create');

        $registeruser = \App\RegisterUser::orderBy('id','DESC')->paginate(5);
       
        return view('UserRegistration.index',compact('registeruser'))->with('i', ($request->input('page', 1) - 1) * 5);



	}
    
    public function create()
    {
        return view('UserRegistration.create');
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
        
        if($request->get('vehicle') == '')
        {
            $vehicleString = '';
        }
        else{
            $vehicleString = implode(",", $request->get('vehicle'));
        }   
        $this->validate($request, [
            'name' => 'required',
            'lastname' => 'required',
         ]);


      /*$file = $request->file('image');
   
      //Display File Name
      echo 'File Name: '.$file->getClientOriginalName();
      echo '<br>';
   
      //Display File Extension
      echo 'File Extension: '.$file->getClientOriginalExtension();
      echo '<br>';
   
      //Display File Real Path
      echo 'File Real Path: '.$file->getRealPath();
      echo '<br>';
   
      //Display File Size
      echo 'File Size: '.$file->getSize();
      echo '<br>';
   
      //Display File Mime Type
      echo 'File Mime Type: '.$file->getMimeType();
   
      //Move Uploaded File
      $destinationPath = 'uploads';
      $file->move($destinationPath,$file->getClientOriginalName());
  */   

       
        $status = \App\RegisterUser::create([
        'name' => $request->get('name'),
        'lastname' => $request->get('lastname'),
        'gender' => $request->get('gender'),
        'vehicle' => $vehicleString,
        ]);


        //\App\RegisterUser::create($status);
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
        $product['vehicle'] = explode(",", $product['vehicle']);
       
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
        $vehicleString = implode(",", $request->get('vehicle'));
        $this->validate($request, [
            'name' => 'required',
            'lastname' => 'required',
        ]);
        \App\RegisterUser::find($id)->update([
        'name' => $request->get('name'),
        'lastname' => $request->get('lastname'),
        'gender' => $request->get('gender'),
        'vehicle' => $vehicleString
        ]);
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
    public function login(Request $request) {
            // Getting all post data
            echo '<pre>';
            print_r($request); die;
            if(Request::ajax()) {

              $data = Input::all();

              print_r($data);die;
    }
    }

}
