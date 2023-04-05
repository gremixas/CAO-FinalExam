<?php

namespace App\Http\Controllers\Front;

use App\Models\Car;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontBookingController extends Controller
{
    public function index()
    {
        if (!auth()->check() || auth()->user()->is_admin)
        {
            return redirect('/');
        }

        $bookings = Booking::where('user_id', "=", Auth::user()->id)->get()->sortByDesc('updated_at');
        return view('front.bookings.home', compact('bookings'));
    }

    public function book($id)
    {
        if (!auth()->check() || auth()->user()->is_admin)
        {
            return redirect('/');
        }

        Booking::create([
            'user_id' => Auth::user()->id,
            'car_id' => $id
        ]);

        return redirect('bookings');
    }
}
