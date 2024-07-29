<?php

namespace App\Http\Controllers;

use App\Models\Tour; // Import model Tour
use App\Models\Booking;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create()
    {
        $tours = Tour::all(); // Giả sử bạn có model Tour để lấy danh sách tours
        return view('book', compact('tours'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'location' => 'required|integer|exists:tours,id',
            'guests' => 'required|integer|min:1',
            'arrival' => 'required|date|after:today',
            'leaving' => 'required|date|after:arrival',
        ]);

        try {
            // Create a new booking
            Booking::create($validatedData);

            // Set success response
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            \Log::error('Booking failed: ' . $e->getMessage());

            // Set failure response
            return response()->json(['success' => false]);
        }
    }
}
