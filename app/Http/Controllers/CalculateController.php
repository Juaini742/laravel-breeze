<?php

namespace App\Http\Controllers;

use App\Models\Calculate;
use App\Models\User;
use Illuminate\Http\Request;

class CalculateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        $calculates = Calculate::all();
        return view('calculate.index', [
            'user' => $user,
            'calculates' => $calculates
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('calculate.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    private function calculateDescription($total)
    {
        // Tentukan description berdasarkan nilai total
        if ($total <= 3) {
            return 'Buruk';
        } elseif ($total <= 6) {
            return 'Cukup';
        } else {
            return 'Baik';
        }
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'nama' => 'string',
            'kehadiran' => 'numeric',
            'kelakuan' => 'required|numeric',
            'disiplin' => 'required|numeric',
            'total' => 'numeric',
            'description' => 'string',
        ]);

        $total = $validateData['kehadiran'] + $validateData['kelakuan'] + $validateData['disiplin'];

        $validateData['total'] = $total;
        $validateData['description'] = $this->calculateDescription($total);

        Calculate::create($validateData);

        return redirect('/calculate')->with('success', 'Post has been added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Calculate $calculate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calculate $calculate)
    {
        return view('calculate.create');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calculate $calculate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calculate $calculate)
    {
        //
    }
}
