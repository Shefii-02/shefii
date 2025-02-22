@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="mb-4 text-center">Create New Documentation</h2>

    @if(session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="{{ route('techdocs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="sidebar_title" class="form-label">Sidebar Title</label>
            <input type="text" name="sidebar_title" id="sidebar_title" class="form-control" value="{{ old('sidebar_title') }}" required>
            @error('sidebar_title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Documentation Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" rows="4" class="form-control" required>{{ old('description') }}</textarea>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label for="code" class="form-label">Code Example (Optional)</label>
            <textarea name="code" id="code" rows="6" class="form-control">{{ old('code') }}</textarea>
            @error('code') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="number" name="position" id="position" class="form-control" value="{{ old('position', 0) }}" required>
            @error('position') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Documentation</button>
    </form>
</div>
@endsection
