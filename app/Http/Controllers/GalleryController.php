<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(){
        //storage_path();
        //public_path();
        /*
        var_dump(
            Storage::files('public/img')
        );
        */
        return view('index', [
            //'images' => Storage::disk('public')->files('img')
            'images' => Image::all()
        ]);
    }

    public function details($id){   // korábban paraméterként: $path
        //echo $path;
        return view('details', [
            //'path' => $path
            'image' => Image::find($id)
        ]);
    }

    /**
     * show image
     */
}
