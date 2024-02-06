<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;


class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('08_EventsDashboard', compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        return response()->json(['event' => $event], 200);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'event_type' => 'required',
                'display_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
    
            $adminId = Session::get('admin_id');

            if (!$adminId) {
                throw new \Exception('Admin ID not found in session.');
            }
    
            $photoPath = null;
    
            if ($request->hasFile('photo')) {
                // Store the uploaded file to the specified folder
                $photoPath = $request->file('photo')->store('assets\images\events', 'public');
            }
    
            $event = new Event([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'event_type' => $request->input('event_type'),
                'display_image' => $photoPath, 
            ]);
    
            $event->save();
    
            return redirect()->route('eventsdashboard');
        } catch (ValidationException $e) {
            return response()->json(['error' => $e->errors()], 400);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'sometimes|required',
            'description' => 'sometimes|required',
            'event_type' => 'sometimes|required',
            'display_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $photoPath = null;
    
        if ($request->hasFile('photo')) {
            // Store the uploaded file to the specified folder
            $photoPath = $request->file('photo')->store('assets\images\events', 'public');
        }
    
        $event = Event::findOrFail($id);
    
        $event->title = $request->input('title', $event->title);
        $event->description = $request->input('description', $event->description);
        $event->event_type = $request->input('event_type', $event->event_type);
    
        if ($photoPath) {
            $event->display_image = $photoPath;
        }
    
        $event->save();
    
        return redirect()->route('eventsdashboard');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('eventsdashboard');
    }

    public function showEditEvent($id)
    {
        $event = Event::findOrFail($id);
        return view('09_editevent', compact('event'));
    }
}
