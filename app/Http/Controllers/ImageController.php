<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class ImageController extends Controller
{
    //

    public function index()

    {

        return view('imageUpload');

    }



    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $this->validate($request, [

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);



        if($request->hasFile('image')) {

            $image = Image::make($request->file('image'));



            /**

             * Main Image Upload on Folder Code

             */

            $imageName = time().'-'.$request->file('image')->getClientOriginalName();

            $destinationPath = public_path('assets/img/blog/');

            $image->save($destinationPath.$imageName);



            /**

             * Generate Thumbnail Image Upload on Folder Code

             */

            $destinationPathThumbnail = public_path('assets/img/blog/thumbnail/');

            $image->fit(100,100);

            $image->save($destinationPathThumbnail.$imageName);



            /**

             * Write Code for Image Upload Here,

             *

             * $upload = new Images();

             * $upload->file = $imageName;

             * $upload->save();

            */



            return back()

                ->with('success','Image Upload successful')

                ->with('imageName',$imageName);

        }



        return back();

    }
}
