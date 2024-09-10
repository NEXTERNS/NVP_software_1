<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Expenditure;

use Illuminate\Http\Request;

class ExpenditureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenditure = Expenditure::latest()->paginate(5);
        return view('expenditure.index',compact('expenditure'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenditure.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'detail' => 'required',
            'date' => 'required',
            'amount' => 'required', // Assuming this field is optional
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }
  
        expenditure::create($input);
   
        return redirect()->route('expenditure.index')->with('success','expenditure Create Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Expenditure $expenditure)
    {
        return view('expenditure.show',compact('expenditure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Expenditure $expenditure)
    {
        return view('expenditure.edit',compact('expenditure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expenditure $expenditure )
    {
        $request->validate([
            'category' => 'required',
            'detail' => 'required',
            'date' => 'required',
            'amount' => 'required', // Assuming this field is optional
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $expenditureImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $expenditureImage);
            $input['image'] = "$expenditureImage";
        }else{
            unset($input['image']);
        }
          
        $expenditure->update($input);
  
        return redirect()->route('expenditure.index')->with('success','expenditure Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expenditure $expenditure)
    {
        $expenditure->delete();
  
        return redirect()->route('expenditure.index')->with('success','expenditure Deleted Successfully');
    }
}