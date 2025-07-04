@extends('layouts.app')

@section('title', 'Events')

@section('content')
    <div class="row mb-4">
        <div class="col-md-12">
            <h2 class="h4">Upcoming Events</h2>
            <p>Find events that spark your interest!</p>
            <form method="GET" action="{{ route('events.index') }}" class="row g-3">
                <div class="col-md-4">
                    <label for="city" class="form-label">City</label>
                    <select name="city" id="city" class="form-select">
                        <option value="all">All Cities</option>
                        @foreach ($cities as $cityItem)
                            <option value="{{ $cityItem }}" {{ $cityItem == $city ? 'selected' : '' }}>{{ $cityItem }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="category" class="form-label">Category</label>
                    <select name="category" id="category" class="form-select">
                        <option value="all">All Categories</option>
                        @foreach ($categories as $categoryItem)
                            <option value="{{ $categoryItem }}" {{ $categoryItem == $category ? 'selected' : '' }}>{{ $categoryItem }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 align-self-end">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @forelse ($events as $event)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                        <p class="card-text"><small class="text-muted">Date: {{ \Carbon\Carbon::parse($event->date)->format('M d, Y') }}</small></p>
                        <p class="card-text"><small class="text-muted">Time: {{ $event->time ?? 'N/A' }}</small></p>
                        <p class="card-text"><small class="text-muted">City: {{ $event->city ?? 'N/A' }}</small></p>
                        <p class="card-text"><small class="text-muted">Category: {{ $event->category ?? 'N/A' }}</small></p>
                        <a href="{{ route('events.show', $event->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-md-12">
                <p class="text-muted">No events found. Check back soon!</p>
            </div>
        @endforelse
    </div>
@endsection
