<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Analytics;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Customer;
use App\Models\Products;
use App\Models\Productsales;
use App\Models\Expenditure;
use App\Models\User;
class AnalyticsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $analytics = Analytics::latest()->paginate(5);
    $totalSales = productsales::count();
    $totalSales = Customer::count('name');
    $totalRevenue = Productsales::sum('sellingprice');
    $totalcostprice = Products::sum('Unitprice');
    $Total_profit = 0;
    foreach (Products::get('name') as $name) {
        if (Productsales::get('name') == $name) {
            $Total_profit = $totalRevenue - $totalcostprice;

        }
    }

    // $average_transaction= Productsales::avarage('sellingprice');
        return view('analytics.index',compact(['analytics', 'totalSales', 'totalRevenue', 'Total_profit']))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
