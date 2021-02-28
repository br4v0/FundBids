<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plans;
use App\Models\Percentage;

class PlansController extends Controller
{
    protected $authUserId = 0;

    public function __construct(Request $request)
    {
        $this->middleware(function ($request, $next) {
            if (auth()->check()) {
                $this->authUserId = auth()->user()->id;
            }
            return $next($request);
        });
    }

    public function show(Request $request){
        return view('plans');
    }
}
