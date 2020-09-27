<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class DropzoneController extends Controller
{

    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function dropzone()
    {
        return view('dropzone-view');
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzonePenginapan(Request $request)
    {
        $image = $request->file('file');

        $imageName = time().'.'.$image->extension();
        $image->move(public_path('assets/img/upload/penginapan'),$imageName);

        return response()->json(['success'=>$imageName]);
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneTour(Request $request)
    {
        $image = $request->file('file');

        $imageName = time().'.'.$image->extension();
        $image->move(public_path('assets/img/upload/tour'),$imageName);

        return response()->json(['success'=>$imageName]);
    }

}
