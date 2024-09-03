<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $maxPerPage = 20;
        
        $totalPassengers = Passenger::count(); 
        
        $searchQuery = $request->input('search'); 
        
        $perPage = min($request->get('per-page', 5), $maxPerPage);
        
        $query = Passenger::query();
        
        if ($searchQuery) {
            $query->where('first_name', 'like', '%' . $searchQuery . '%')
                  ->orWhere('last_name', 'like', '%' . $searchQuery . '%')
                  ->orWhere('passenger_id', 'like', '%' . $searchQuery . '%');
        }
        
        $passengers = $query->paginate($perPage);
        
        return view('AdminDashboard.passengers.index', compact('passengers', 'totalPassengers', 'searchQuery'));
    }
    

    
    
    public function create()
    {
        $users = User::all();

        return view('AdminDashboard.passengers.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id', 
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);

        $passenger = new Passenger(); 
        $passenger->user_id = $validatedData['user_id'];
        $passenger->first_name = $validatedData['first_name'];
        $passenger->last_name = $validatedData['last_name'];
        $passenger->save();

        return redirect()->route('passengers.index')->with('success', 'Passenger created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Find the passenger by passenger_id
        $passenger = Passenger::where('passenger_id', $id)->firstOrFail();
        
        $users = User::all();
        
        return view('AdminDashboard.passengers.edit', compact('passenger', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);
    
        $passenger = Passenger::where('passenger_id', $id)->firstOrFail();
    
        $passenger->user_id = $validatedData['user_id'];
        $passenger->first_name = $validatedData['first_name'];
        $passenger->last_name = $validatedData['last_name'];
        $passenger->save();
    
        return redirect()->route('passengers.index')->with('success', 'Passenger updated successfully.');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $passenger = Passenger::findOrFail($id);
        $passenger->delete();
    
        return redirect()->route('passengers.index')->with('success', 'Passenger deleted successfully.');
    }
}
