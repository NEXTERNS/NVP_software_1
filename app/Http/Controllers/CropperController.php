<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cropper;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\CustomerModel;



class CropperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $croppers = Cropper::latest()->paginate(5);
        return view('cropper.imagecropper',compact('croppers'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
