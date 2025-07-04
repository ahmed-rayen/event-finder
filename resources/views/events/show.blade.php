@extends('layouts.app')

@section('title', $event->title)

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="h4 mb-3">{{ $event->title }}</h2>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">{{ $event->description }}</p>
                    <p class="card-text"><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->date)->format('M d, Y') }}</p>
                    <p class="card-text"><strong>Time:</strong> {{ $event->time ?? 'N/A' }}</p>
                    <p class="card-text"><strong>Location:</strong> {{ $event->location ?? 'TBD' }}</p>
                    <p class="card-text"><strong>City:</strong> {{ $event->city ?? 'N/A' }}</p>
                    <p class="card-text"><strong>Category:</strong> {{ $event->category ?? 'N/A' }}</p>
                    <a href="{{ route('events.index') }}" class="btn btn-secondary">Back to Events</a>
                </div>
            </div>
        </div>
    </div>
@endsection
