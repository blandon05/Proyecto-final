<?php

namespace App\Http\Controllers;

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

}
