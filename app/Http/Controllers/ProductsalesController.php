<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Productsales;
use App\Models\CustomerModel;
use App\Models\Customer;



class ProductsalesController extends Controller
{
    //

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(50);
        $customers = Customer::latest()->paginate(5);

        return view('productsales.index', compact(['products' ,'customers']));
    }

    


    public function history()
    {
        $products = Product::latest()->paginate(50);
        $customers = Customer::latest()->paginate(5);
        $productsales = Productsales::latest()->paginate(50);


        return view('productsales.showsaleshistory', compact(['products' ,'customers', 'productsales']));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productsales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'qtysold'  => 'required',
            'date'  => 'nullable',
            'customername'  => 'required',
            'sellingprice'  => 'required',

       
        ]);

        $input = $request->all();
        Productsales::create($input);
   
        return redirect()->route('productsales.index')->with('success','Productsales Create Successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Productsales  $productsales
     * @return \Illuminate\Http\Response
     */
  
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productsales  $productsales
     * @return \Illuminate\Http\Response
     */
    public function edit(Productsales $productsales)
    {
        return view('productsales.edit', compact('productsales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productsales  $productsales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productsales $productsales )
    {
        request()->validate([
            'name' => 'required',
            'qtysold'  => 'required',
            'date'  => 'required',
            'customername'  => 'required',
            'sellingprice'  => 'required',

       
        ]);
        $input = $request->all();
  
        $productsales->update($input);
  
        return redirect()->route('productsales.index')->with('success','productsales Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productsales  $productsales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productsales $productsales)
    {
        $productsales->delete();

        return redirect()->route('productsales.index')
            ->with('success', 'Productsales deleted successfully');
    }




}
