<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Passengers;
use App\Models\seats;
use App\Models\Tickets;
use Illuminate\Http\Request;


class AdminDashboardController extends Controller
{
    public function cardsShow()  {
        $ticketCount = Tickets::count();
        $passengersCount = Passengers::count();
        $seatsCount = seats::count();
        // dd($ticketCount);
        return view('AdminDashboard.layouts.statstic', ['ticketCount' => $ticketCount , 'passengers'=>$passengersCount , 'seatsCount'=>$seatsCount]);


    }
}