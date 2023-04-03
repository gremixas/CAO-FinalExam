<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class AdminBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::with('car')->with('user')->get()->sortByDesc('updated_at');
        // dd($bookings);
        return view('admin.bookings.index', compact('bookings'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return response()->json(['success' => true]);
    }
}
