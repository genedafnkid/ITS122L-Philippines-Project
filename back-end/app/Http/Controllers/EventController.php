<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return response()->json(['events' => $events], 200);
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        return response()->json(['event' => $event], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'event_type' => 'required',
            'display_image' => 'nullable',
            'created_by' => 'required|exists:admins,id',
        ]);

        $event = Event::create($request->all());

        return response()->json(['event' => $event], 201);
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'title' => 'sometimes|required',
            'description' => 'sometimes|required',
            'event_type' => 'sometimes|required',
            'display_image' => 'sometimes|nullable',
            'created_by' => 'sometimes|required|exists:admins,id',
        ]);

        $updateData = $request->only([
            'title', 'description', 'event_type', 'display_image', 'created_by',
        ]);

        $event->update($updateData);

        return response()->json(['event' => $event], 200);
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return response()->json(null, 204);
    }
}
