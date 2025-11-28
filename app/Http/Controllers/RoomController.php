<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomType;
class RoomController extends Controller
{
    //
    public function index()
    {
        $rooms = Room::with('type')->get();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        $types = RoomType::all();
        return view('rooms.create', compact('types'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if (empty($data['floor'])) $data['floor'] = null;
        Room::create($data);
        return redirect()->route('rooms.index');
    }

    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }

    public function edit(Room $room)
    {
        $types = RoomType::all();
        return view('rooms.edit', compact('room', 'types'));
    }

    public function update(Request $request, Room $room)
    {
        $data = $request->all();
        if (empty($data['floor'])) $data['floor'] = null;
        $room->update($data);
        return redirect()->route('rooms.index');
    }

    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('rooms.index');
    }
}
