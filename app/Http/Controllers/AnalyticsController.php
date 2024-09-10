<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Analytics;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\CustomerModel;

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
        return view('analytics.index',compact('analytics'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
