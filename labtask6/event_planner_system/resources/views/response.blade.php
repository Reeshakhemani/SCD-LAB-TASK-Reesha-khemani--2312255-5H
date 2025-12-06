@extends('layouts.app')

@section('title', 'Event Created - Event Planner')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="text-center mb-5">
                <div class="success-animation mb-4">
                    <i class="fas fa-check-circle text-success" style="font-size: 80px;"></i>
                </div>
                
                <h2 class="text-success mb-3">Event Created Successfully!</h2>
                <p class="lead text-muted">Your event has been successfully created and added to the system.</p>
            </div>

            @isset($eventData)
                <div class="detail-card p-4 mb-4">
                    <h4 class="text-center mb-4">Event Details</h4>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <strong>Event Name:</strong>
                            <p class="text-muted">{{ $eventData['name'] }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Date:</strong>
                            <p class="text-muted">{{ \Carbon\Carbon::parse($eventData['date'])->format('M d, Y') }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Location:</strong>
                            <p class="text-muted">{{ $eventData['location'] }}</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Status:</strong>
                            <span class="status-badge status-upcoming">
                                <i class="fas fa-clock me-1"></i>{{ ucfirst($eventData['status']) }}
                            </span>
                        </div>
                        <div class="col-12 mb-3">
                            <strong>Description:</strong>
                            <p class="text-muted">{{ $eventData['description'] }}</p>
                        </div>
                    </div>
                </div>
            @else
                <div class="alert alert-warning text-center">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    No event data received.
                </div>
            @endisset

            <div class="text-center mt-4">
                <a href="{{ route('events.create') }}" class="btn btn-gradient me-3">
                    <i class="fas fa-plus me-2"></i>Create Another Event
                </a>
                <a href="{{ route('events.index') }}" class="btn btn-outline-primary">
                    <i class="fas fa-list me-2"></i>View All Events
                </a>
            </div>
        </div>
    </div>
</div>
@endsection