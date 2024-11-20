<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\CustomerModel;
use App\Models\Productsales;
use App\Models\Expenditure;
use App\Models\User;

class StartisticController extends Controller
{
    //
    public function salesSumary(){
    
    $totalSales = Sale::count();
    $totalSales = CustomerModel::count('name');
    $totalRevenue = Productsales::sum('sellingprice');
    
    $average_transaction= Productsales::avarage('sellingprice');

    return view('roles.index', compact('roles'));

}

public function topProducts($limit = 5){
    $topProducts= Productsales::with(name)->select('id',
     DB::raw('count(*) as total_sales'))->groupBy('id')->orderBy('total_sales', 'desc')->take($limit)->get();
}
}
