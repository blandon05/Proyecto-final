<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(){

        $bookings = Booking::all();
        
        return inertia('Sales/Index', [
            'bookings' => $bookings
        ]);
    }
}
