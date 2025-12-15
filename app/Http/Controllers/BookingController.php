<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validation
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:20',
            'customer_address' => 'required|string',
            'car_type' => 'required|in:small,medium,large',
            'service_type' => 'required|in:wash,detail,coating',
            'booking_date' => 'required|date|after_or_equal:today',
            'booking_time' => 'required',
        ]);

        // 2. Check Availability (Prevent Double Booking)
        $exists = Booking::where('booking_date', $validated['booking_date'])
            ->where('booking_time', $validated['booking_time'])
            ->where('status', '!=', 'cancelled')
            ->exists();

        if ($exists) {
            return back()->withErrors(['booking_time' => 'This time slot is already booked. Please choose another time.'])->withInput();
        }

        // 3. Calculate Price
        $prices = [
            'wash' => ['small' => 50000, 'medium' => 60000, 'large' => 70000],
            'detail' => ['small' => 350000, 'medium' => 450000, 'large' => 550000],
            'coating' => ['small' => 1500000, 'medium' => 2000000, 'large' => 2500000],
        ];

        $price = $prices[$validated['service_type']][$validated['car_type']];

        // 4. Create Booking
        Booking::create([
            ...$validated,
            'price' => $price,
            'status' => 'pending',
        ]);

        return redirect()->route('booking.success')->with('success', 'Booking submitted successfully!');
    }
}
