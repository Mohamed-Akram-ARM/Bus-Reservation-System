<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Reservation;

class HomeController extends Controller
{
  public function index()
  {
    $buses = Bus::latest()->take(0)->get();
    $date = request('Date') ?? now()->toDateString(); 
    return view('home.index', compact('buses', 'date'));
  }

  public function search(Request $request)
  {


    $arrivalLocation = $request->arrivalLocation;
    $destination = $request->destination;
   
    $date = $request->date ?? now()->toDateString();

    $buses = Bus::where('from', 'like', "%$arrivalLocation%")
                ->where('to', 'like', "%$destination%")
          
                ->get();

  
    foreach ($buses as $bus) {
        $bookedSeats = Reservation::where('bus_id', $bus->id)
                                  ->whereDate('Date', $date) 
                                  ->count();

        $bus->bookedSeats = $bookedSeats;
        $bus->availableSeats = $bus->seats_available - $bookedSeats;
    }

    return view('home.index', compact('buses', 'date'));

}


public function show(Bus $bus, Request $request)
{
    $date = $request->input('date', now()->toDateString());

    $bookedSeats = Reservation::where('bus_id', $bus->id)
                              ->whereDate('Date', $date)
                              ->pluck('seat_no')
                              ->toArray();

    return view('home.show', compact('bus', 'bookedSeats', 'date'));
}
}