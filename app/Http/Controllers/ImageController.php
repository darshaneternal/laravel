<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Http\Requests;
    class ImageController extends Controller
    {
        /**
        * Create view file
        *
        * @return void
        */
        public function getImage(Request $request)
        {   
            $registeruser = \App\image::orderBy('id','DESC')->paginate(5);
            return view('upload-image',compact('registeruser'))->with('i', ($request->input('page', 1) - 1) * 5);

            
        }
        /**
        * Manage Post Request
        *
        * @return void
        */
        public function postImage(Request $request)
        {
            $this->validate($request, [
                'image_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            ]);
            
            $imageName = time().'.'.$request->image_file->getClientOriginalExtension();
            
            $request->image_file->move(public_path('images'), $imageName);

            $status = \App\image::create([
                'image' => $imageName,
                ]);


            return back()
                ->with('success','You have successfully upload images.')
                ->with('image',$imageName);
        }
    }