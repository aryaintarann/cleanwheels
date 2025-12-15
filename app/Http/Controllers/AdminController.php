<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class AdminController extends Controller
{
    public function index()
    {
        $bookings = Booking::orderBy('booking_date', 'desc')
            ->orderBy('booking_time', 'desc')
            ->get(); // In real app, paginate

        return view('dashboard', compact('bookings'));
    }

    public function updateStatus(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,completed,cancelled'
        ]);

        $booking->update(['status' => $validated['status']]);

        return back()->with('success', 'Booking status updated.');
    }
}
