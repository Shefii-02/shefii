@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="mb-4 text-center">Technology Documentation</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                @foreach($docs as $doc)
                    <a href="{{ route('techdocs.show', $doc->slug) }}" class="list-group-item list-group-item-action">
                        {{ $doc->sidebar_title }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-md-8">
            <div class="card p-4">
                <h4 class="card-title">Select a document from the list</h4>
                <p class="card-text">Click on any documentation on the left to view details.</p>
            </div>
        </div>
    </div>
</div>
@endsection
