<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    private $events = [
        [
            'id' => 1,
            'name' => 'NEW YEAR PARTY',
            'date' => '2025-12-31',
            'location' => 'AL habib, Do darya Karachi',
            'description' => 'The party to good bye current year and Welcome New ',
            'status' => 'upcoming'
        ],
        [
            'id' => 2,
            'name' => 'Music Festival',
            'date' => '2024-11-20',
            'location' => 'Lyari Garden, clifton block 2 Karachi',
            'description' => 'Live music performances from various artists',
            'status' => 'upcoming'
        ],
        [
            'id' => 3,
            'name' => 'Zabefest',
            'date' => '2024-10-05',
            'location' => 'Szabist 100 Clifton, Karachi',
            'description' => 'Better event to show yourself and explore your skills',
            'status' => 'completed'
        ]
    ];

    public function index()
    {
        $events = $this->events;
        return view('events', compact('events'));
    }

    public function details($id)
    {
        $event = collect($this->events)->firstWhere('id', $id);
        
        if (!$event) {
            abort(404, 'Event not found');
        }

        return view('details', compact('event'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        $eventData = [
            'id' => count($this->events) + 1,
            'name' => $request->name,
            'date' => $request->date,
            'location' => $request->location,
            'description' => $request->description,
            'status' => 'upcoming'
        ];

        return view('response', compact('eventData'));
    }
}