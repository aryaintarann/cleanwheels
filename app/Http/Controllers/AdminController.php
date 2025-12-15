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

    public function customers()
    {
        // Get unique customers based on phone number
        $customers = Booking::select('customer_name', 'customer_phone', 'customer_address')
            ->selectRaw('count(*) as total_bookings')
            ->selectRaw('SUM(price) as total_spent')
            ->selectRaw('MAX(booking_date) as last_booking')
            ->groupBy('customer_phone', 'customer_name', 'customer_address') // Group by phone as unique identifier
            ->get();

        return view('admin.customers', compact('customers'));
    }

    public function settings()
    {
        return view('admin.settings', [
            'user' => auth()->user(),
        ]);
    }
}
