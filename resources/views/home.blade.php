@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <div class="bg-primary text-white py-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Welcome to Event Finder</h1>
            <p class="lead mb-4">Discover exciting events in your city! From music festivals to tech conferences, find your next adventure.</p>
            <a href="{{ route('events.index') }}" class="btn btn-light btn-lg">Explore Events Now</a>
        </div>
    </div>

    <!-- Featured Events Section -->
    <div class="container py-5">
        <h2 class="h4 mb-4">Featured Events</h2>
        <div class="row">
            @forelse ($events as $event)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-text">{{ Str::limit($event->description, 80) }}</p>
                            <p class="card-text"><small class="text-muted">Date: {{ \Carbon\Carbon::parse($event->date)->format('M d, Y') }}</small></p>
                            <p class="card-text"><small class="text-muted">Time: {{ $event->time ?? 'N/A' }}</small></p>
                            <p class="card-text"><small class="text-muted">City: {{ $event->city ?? 'N/A' }}</small></p>
                            <a href="{{ route('events.show', $event->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12">
                    <p class="text-muted">No events available right now. Check back soon!</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
