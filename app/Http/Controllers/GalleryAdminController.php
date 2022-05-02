<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageUploadPostRequest;
use App\Models\Image;
use Illuminate\Http\Request;

class GalleryAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function upload(){
        return view('upload');
    }

    public function store(ImageUploadPostRequest $request){
        //$request->image->storeAs('img', 'f.png');
        $token = basename($request->image->store('public/img'));
        /* Mi az image?
         <input type="file" name="image">
        Így is lehetne a fenti:
        $request->input('image')->store(...);

        PL.: <input type="text" name="firstname">
         $request->input('firstname', 'Nem adott meg nevet);
        Tehát default értéket is megadhatunk itt.
         */
        $img = new Image();
        $img->filename = $token;
        $img->alt = $request->alt;  // $request->input('alt);
        $img->description = $request->description;
        $img->save();

        return "Sikeres feltöltés ($token)!" . '<a href="/upload">Vissza</a>';
    }

    /**
     * upload image
     * delete image
     */
}
