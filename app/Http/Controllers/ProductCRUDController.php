<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ProductCRUDController extends Controller
{	
    public function index(Request $request)
    {	

    	//return view('ProductCRUD.create');

    $products = \App\Product::orderBy('id','DESC')->paginate(5);
        return view('ProductCRUD.index',compact('products'))->with('i', ($request->input('page', 1) - 1) * 5);
	}
    
    public function create()
    {
        return view('ProductCRUD.create');
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
            'details' => 'required',
        ]);
        \App\Product::create($request->all());
        return redirect()->route('productCRUD.index')
                        ->with('success','Product created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product= \App\Product::find($id);
        return view('ProductCRUD.show',compact('product'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product= \App\Product::find($id);
        return view('ProductCRUD.edit',compact('product'));
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
            'details' => 'required',
        ]);
        \App\Product::find($id)->update($request->all());
        return redirect()->route('productCRUD.index')
                        ->with('success','Product updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Product::find($id)->delete();
        return redirect()->route('productCRUD.index')
                        ->with('success','Product deleted successfully');

    
    }

}
