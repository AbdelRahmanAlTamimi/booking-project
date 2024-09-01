<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FligthsController extends Controller
{
     public function search(Request $request)
   {
       $departureAirport = $request->input('departure_airport');
       $arrivalAirport = $request->input('arrival_airport');
       $departureDate = $request->input('departure_date');
       $returnDate = $request->input('return_date');
       $tripType = $request->input('trip_type');

       $flights = DB::table('Flights')
           ->join('Airports as a1', 'Flights.DepartureAirportID', '=', 'a1.AirportID')
           ->join('Airports as a2', 'Flights.ArrivalAirportID', '=', 'a2.AirportID')
           ->where('a1.City', '=', $departureAirport)
           ->where('a2.Country', '=', $arrivalAirport)
           ->whereDate('Flights.DepartureDateTime', '=', $departureDate)
           ->where('Flights.AvailableSeats', '>', 0)
           ->orderBy('Flights.Price', 'asc')
           ->get();

       if ($tripType === 'round-trip') {
           $returnFlights = DB::table('Flights')
               ->join('Airports as a1', 'Flights.DepartureAirportID', '=', 'a1.AirportID')
               ->join('Airports as a2', 'Flights.ArrivalAirportID', '=', 'a2.AirportID')
               ->where('a1.City', '=', $arrivalAirport)
               ->where('a2.Country', '=', $departureAirport)
               ->whereDate('Flights.DepartureDateTime', '=', $returnDate)
               ->where('Flights.AvailableSeats', '>', 0)
               ->orderBy('Flights.Price', 'asc')
               ->get();
       }

       return view('flights.search_results', compact('flights', 'returnFlights'));
   }
}
