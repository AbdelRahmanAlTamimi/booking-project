<?php

namespace App\Http\Controllers;

use App\Models\Planes;
use Illuminate\Http\Request;

class planescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $maxPerPage = 20;

        $totalPlanes = Planes::count();

        $searchQuery = $request->input('search');
        $statusFilter = $request->input('status');

        $perPage = min($request->get('per-page', 5), $maxPerPage);

        $query = Planes::query();

        if ($searchQuery) {
            $query->where('plane_id', 'like', '%' . $searchQuery . '%')
                ->orWhere('model', 'like', '%' . $searchQuery . '%')
                ->orWhere('total_seats', 'like', '%' . $searchQuery . '%')
                ->orWhere('status', 'like', '%' . $searchQuery . '%');
        }

        if ($statusFilter) {
            $query->where('status', $statusFilter);
        }

        $planes = $query->paginate($perPage);

        return view('AdminDashboard.planes.index', compact('planes', 'totalPlanes', 'searchQuery', 'statusFilter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Plane = Planes::all();

        return view('AdminDashboard.planes.create', compact('Plane'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'status' => 'nullable|in:active,inactive',
            'model' => 'required|string|max:255',
            'total_seats' => 'required|integer|min:1',
        ]);

        $plane = new Planes();
        $plane->status = $validatedData['status'];
        $plane->model = $validatedData['model'];
        $plane->total_seats = $validatedData['total_seats'];

        $plane->save();

        return redirect()->route('planes.index')->with('success', 'Plane created successfully.');
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
        $plane = Planes::findOrFail($id);

        return view('AdminDashboard.planes.edit', compact('plane'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'nullable|in:active,inactive',
            'model' => 'required|string|max:255',
            'total_seats' => 'required|integer|min:1',
        ]);

        $plane = Planes::findOrFail($id);

        $plane->status = $validatedData['status'];
        $plane->model = $validatedData['model'];
        $plane->total_seats = $validatedData['total_seats'];

        $plane->save();

        return redirect()->route('planes.index')->with('success', 'Plane updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the plane by ID
        $plane = Planes::findOrFail($id);

        // Delete the plane
        $plane->delete();

        // Redirect to the index page with a success message
        return redirect()->route('planes.index')->with('success', 'Plane deleted successfully.');
    }
}
