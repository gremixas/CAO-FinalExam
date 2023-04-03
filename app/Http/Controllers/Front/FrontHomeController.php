<?php

namespace App\Http\Controllers\Front;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontHomeController extends Controller
{
    public function index()
    {
        $cars = Car::get();
        return view('front.home', compact('cars'));
    }

    public function show(Car $car)
    {
        return view('front.show', compact('car'));
    }
}
