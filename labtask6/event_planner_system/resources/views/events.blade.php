@extends('layouts.app')

@section('title', 'All Events - Event Planner')

@push('styles')
<style>
    .page-title {
        color: #2c3e50;
        font-weight: 700;
        margin-bottom: 30px;
        position: relative;
    }
    
    .page-title:after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 60px;
        height: 4px;
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        border-radius: 2px;
    }
</style>
@endpush

@section('content')
<div class="hero-section">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Upcoming Events</h1>
        <p class="lead">Discover and manage all your events in one place</p>
        <a href="{{ route('events.create') }}" class="btn btn-light btn-lg mt-3">
            <i class="fas fa-plus me-2"></i>Create New Event
        </a>
    </div>
</div>

<div class="container">
    <h2 class="page-title">All Events</h2>

    @isset($events)
        @if(!empty($events))
            <div class="table-responsive">
                <table class="table table-custom table-hover">
                    <thead>
                        <tr>
                            <th><i class="fas fa-calendar me-2"></i>Event Name</th>
                            <th><i class="fas fa-clock me-2"></i>Date</th>
                            <th><i class="fas fa-map-marker-alt me-2"></i>Location</th>
                            <th><i class="fas fa-info-circle me-2"></i>Status</th>
                            <th><i class="fas fa-cog me-2"></i>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                        <tr>
                            <td>
                                <strong>{{ $event['name'] }}</strong>
                            </td>
                            <td>
                                <i class="fas fa-calendar-day me-2 text-primary"></i>
                                {{ \Carbon\Carbon::parse($event['date'])->format('M d, Y') }}
                            </td>
                            <td>
                                <i class="fas fa-map-pin me-2 text-danger"></i>
                                {{ $event['location'] }}
                            </td>
                            <td>
                                @if($event['status'] == 'upcoming')
                                    <span class="status-badge status-upcoming">
                                        <i class="fas fa-clock me-1"></i>Upcoming
                                    </span>
                                @elseif($event['status'] == 'ongoing')
                                    <span class="status-badge status-ongoing">
                                        <i class="fas fa-play-circle me-1"></i>Ongoing
                                    </span>
                                @else
                                    <span class="status-badge status-completed">
                                        <i class="fas fa-check-circle me-1"></i>Completed
                                    </span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('events.details', $event['id']) }}" 
                                   class="btn btn-sm btn-outline-primary rounded-pill">
                                    <i class="fas fa-eye me-1"></i>View Details
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-calendar-times fa-4x text-muted mb-3"></i>
                <h3 class="text-muted">No Events Found</h3>
                <p class="text-muted">There are no events to display at the moment.</p>
                <a href="{{ route('events.create') }}" class="btn btn-gradient mt-3">
                    <i class="fas fa-plus me-2"></i>Create Your First Event
                </a>
            </div>
        @endif
    @else
        <div class="alert alert-warning text-center">
            <i class="fas fa-exclamation-triangle me-2"></i>
            Event data is not available.
        </div>
    @endisset
</div>
@endsection