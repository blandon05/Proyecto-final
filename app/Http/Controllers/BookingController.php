<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){

        $bookings = Booking::all();
        
        return inertia('Booking/Index', [
            'bookings' => $bookings
        ]);
    }

    public function create()
    {
        $services = Service::all();
        return inertia('Booking/Create', [
            'services' => $services
        ]);
    }

    public function store(BookingRequest $request)
    {
        $booking = Booking::create($request->all());
        return redirect()->route('bookings.show', $booking);
    }

    public function show(Booking $booking)
    {
        return inertia('Booking/Detail', [
            'booking' => $booking
        ]);
    }

    public function edit(Booking $booking)
    {
        return inertia('Booking/Edit', [
            'booking' => $booking,
        ]);
    }

}
