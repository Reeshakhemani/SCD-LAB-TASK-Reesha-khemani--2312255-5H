@extends('layouts.app')

@section('title', 'Create Event - Event Planner')

@push('styles')
<style>
    body {
        background: linear-gradient(135deg, #e3f2fd, #e8f5e9);
        min-height: 100vh;
    }

    .form-container {
        background: #ffffff;
        border-radius: 25px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.12);
        padding: 45px;
        transition: 0.3s ease-in-out;
    }

    .form-container:hover {
        transform: translateY(-4px);
        box-shadow: 0 28px 60px rgba(0,0,0,0.15);
    }

    .form-title {
        color: #1a237e;
        font-weight: 800;
        margin-bottom: 35px;
        text-align: center;
        letter-spacing: 1px;
    }

    .form-title i {
        color: #3949ab;
    }

    .form-label {
        font-weight: 600;
        color: #424242;
    }

    .form-control {
        border-radius: 12px;
        padding: 12px 16px;
        border: 2px solid #e0e0e0;
        transition: 0.3s;
    }

    .form-control:focus {
        border-color: #5c6bc0;
        box-shadow: 0 0 0 0.2rem rgba(92,107,192,.25);
    }

    .btn-gradient {
        background: linear-gradient(45deg, #5c6bc0, #1e88e5);
        border: none;
        color: white;
        font-weight: 600;
        border-radius: 30px;
        padding: 12px 35px;
        transition: 0.3s;
    }

    .btn-gradient:hover {
        transform: scale(1.06);
        background: linear-gradient(45deg, #3f51b5, #1565c0);
    }

    .page-title {
        font-weight: 700;
        color: #283593;
    }

    .btn-outline-primary {
        border-radius: 30px;
        padding: 8px 18px;
    }
</style>
@endpush

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <a href="{{ route('events.index') }}" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-left me-2"></i>Back to Events
                </a>
                <h2 class="page-title mb-0">Create New Event</h2>
            </div>

            <div class="form-container">
                <h3 class="form-title">
                    <i class="fas fa-plus-circle me-2"></i>Event Information
                </h3>

                <form method="POST" action="{{ route('events.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label for="name" class="form-label">Event Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Enter event name" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-4">
                            <label for="date" class="form-label">Event Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') }}" required>
                            @error('date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-4">
                            <label for="location" class="form-label">Location <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ old('location') }}" placeholder="Enter event location" required>
                            @error('location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 mb-4">
                            <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" placeholder="Describe your event..." required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-gradient btn-lg">
                            <i class="fas fa-calendar-plus me-2"></i>Create Event
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
