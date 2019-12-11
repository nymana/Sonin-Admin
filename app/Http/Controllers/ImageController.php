<?php

namespace App\Http\Controllers;

use App\model\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images =  image::orderby('id','desc')->get();
        return view('img\image',['image'=>$images,]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imgEdit = Image::findorFail($id);
        return view('npcrud\edit',['update'=>$imgEdit,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(image $image)
    {
        //
    }

    public function save(Request $request)
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

//        if ($files = $request->file('image')) {
//            $destinationPath = 'storage/app/image'; // upload path
//            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
//            $files->move($destinationPath, $profileImage);
//            $insert['image'] = "$profileImage";
//        }

        $path = $request->file('image')->storePublicly('image');

        $check = Image::insertGetId([
            'image' => $path
        ]);

        return redirect()->to("image")
            ->withSuccess('Great! Image has been successfully uploaded.');
    }
}
