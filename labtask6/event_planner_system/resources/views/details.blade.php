@extends('layouts.app')

@section('title', 'Event Details - Event Planner')

@push('styles')
<style>
    body {
        background: #0f172a;
        color: #159d82ff;
    }

    .detail-card {
        background: #021128ff;
        border-radius: 18px;
        padding: 35px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        border: 1px solid rgba(255,255,255,0.05);
    }

    .detail-card h3 {
        color: #7d4608ff;
    }

    .status-badge {
        padding: 8px 18px;
        border-radius: 25px;
        font-weight: 600;
        font-size: 14px;
    }

    .status-upcoming { background: rgba(186, 200, 56, 0.15); color: #38bff89c; }
    .status-ongoing { background: rgba(34, 197, 94, 0.62); color: #bdc522e8; }
    .status-completed { background: rgba(236, 72, 154, 0.91); color: #ec4899; }

    .info-item i {
        color: #38bdf8;
    }

    .event-sidebar {
        background: #1e293b;
        border-radius: 18px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.4);
        padding: 25px;
        border: 1px solid rgba(255,255,255,0.05);
    }

    .btn-gradient {
        background: linear-gradient(90deg, #0ea5e9, #6366f1);
        border: none;
        color: white;
        padding: 10px 20px;
        border-radius: 25px;
        font-weight: 600;
    }

    .btn-gradient:hover {
        transform: scale(1.05);
        background: linear-gradient(90deg, #0284c7, #4f46e5);
    }

    .btn-outline-primary {
        border-color: #38bdf8;
        color: #38bdf8;
    }

    .btn-outline-primary:hover {
        background: #38bdf8;
        color: #0f172a;
    }
</style>
@endpush

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <a href="{{ route('events.index') }}" class="btn btn-outline-primary rounded-pill">
                    <i class="fas fa-arrow-left me-2"></i>Back to Events
                </a>
                <h2 class="page-title mb-0">Event Details</h2>
            </div>

            @isset($event)
                <div class="detail-card">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="fw-bold text-primary mb-3">{{ $event['name'] }}</h3>

                            <div class="mb-4">
                                @if($event['status'] == 'upcoming')
                                    <span class="status-badge status-upcoming"><i class="fas fa-clock me-1"></i>Upcoming</span>
                                @elseif($event['status'] == 'ongoing')
                                    <span class="status-badge status-ongoing"><i class="fas fa-play-circle me-1"></i>Ongoing</span>
                                @else
                                    <span class="status-badge status-completed"><i class="fas fa-check-circle me-1"></i>Completed</span>
                                @endif
                            </div>

                            <div class="event-info">
                                <div class="info-item mb-3">
                                    <i class="fas fa-calendar-day text-primary fa-lg"></i>
                                    <div>
                                        <strong>Date</strong>
                                        <p class="text-muted mb-0">{{ \Carbon\Carbon::parse($event['date'])->format('l, F d, Y') }}</p>
                                    </div>
                                </div>

                                <div class="info-item mb-3">
                                    <i class="fas fa-map-marker-alt text-danger fa-lg"></i>
                                    <div>
                                        <strong>Location</strong>
                                        <p class="text-muted mb-0">{{ $event['location'] }}</p>
                                    </div>
                                </div>

                                <div class="info-item mb-4">
                                    <i class="fas fa-file-alt text-success fa-lg"></i>
                                    <div>
                                        <strong>Description</strong>
                                        <p class="text-muted mb-0">{{ $event['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="event-sidebar text-center p-4">
                                <i class="fas fa-calendar-check fa-3x text-primary mb-3"></i>
                                <h5>Event ID</h5>
                                <p class="fw-bold text-primary">#{{ $event['id'] }}</p>

                                <div class="mt-4">
                                    <a href="{{ route('events.index') }}" class="btn btn-gradient w-100 mb-2">
                                        <i class="fas fa-list me-2"></i>All Events
                                    </a>
                                    <a href="{{ route('events.create') }}" class="btn btn-outline-primary w-100">
                                        <i class="fas fa-plus me-2"></i>Create New
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="alert alert-danger text-center">
                    <i class="fas fa-exclamation-circle me-2"></i>Event not found.
                </div>
            @endisset
        </div>
    </div>
</div>
@endsection
