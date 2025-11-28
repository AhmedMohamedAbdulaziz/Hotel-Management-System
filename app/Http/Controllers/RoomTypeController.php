<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;

class RoomTypeController extends Controller
{
    //
     public function index()
    {
        return view('room_types.index', ['types' => RoomType::all()]);
    }

    public function create()
    {
        return view('room_types.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        foreach (["base_price_per_night","capacity","description","amenities"] as $field) {
            if (empty($data[$field])) $data[$field] = null;
        }
        RoomType::create($data);
        return redirect()->route('room_types.index');
    }

    public function show(RoomType $roomType)
    {
        return view('room_types.show', compact('roomType'));
    }

    public function edit(RoomType $roomType)
    {
        return view('room_types.edit', compact('roomType'));
    }

    public function update(Request $request, RoomType $roomType)
    {
        $data = $request->all();
        foreach (["base_price_per_night","capacity","description","amenities"] as $field) {
            if (empty($data[$field])) $data[$field] = null;
        }
        $roomType->update($data);
        return redirect()->route('room_types.index');
    }

    public function destroy(RoomType $roomType)
    {
        $roomType->delete();
        return redirect()->route('room_types.index');
    }
}
