<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Flights;
use App\Models\Passengers;
use App\Models\Planes;
use App\Models\Tickets;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function cardsShow()
    {
        $ticketCount = Tickets::count();
        $passengersCount = Passengers::count();
        $flightcount = Flights::count();
        $usercount = User::count();
        $plancount = Planes::count();
        
        $adminCount = User::where('role', 'admin')->count();
        $userscount = User::where('role', 'user')->count();
        $pendingcount = Tickets::where('status', 'pending')->count();
        $cancelledcount = Tickets::where('status', 'cancelled')->count();
        $bookedcount = Tickets::where('status', 'booked')->count();
        $activecount = Planes::where('status', 'active')->count();
        $inactivecount = Planes::where('status', 'inactive')->count();

        return view('AdminDashboard.layouts.statstic', [
            'ticketCount' => $ticketCount,
            'passengers' => $passengersCount,
            'usercount' => $usercount,
            'flightcount' => $flightcount,
            'plancount' => $plancount,
            'adminCount' => $adminCount,
            'userscount' => $userscount,
            'pendingcount' => $pendingcount,
            'cancelledcount' => $cancelledcount,
            'bookedcount' => $bookedcount,
            'activecount' => $activecount,
            'inactivecount' => $inactivecount,
        ]);
    }
}
