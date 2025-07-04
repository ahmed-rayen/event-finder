<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $city = $request->input('city', 'all');
        $category = $request->input('category', 'all');

        $query = Event::query();

        if ($city !== 'all') {
            $query->where('city', $city);
        }

        if ($category !== 'all') {
            $query->where('category', $category);
        }

        $events = $query->get();
        $cities = Event::distinct()->pluck('city');
        $categories = Event::distinct()->pluck('category');

        return view('events.index', compact('events', 'cities', 'categories', 'city', 'category'));
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }
}
