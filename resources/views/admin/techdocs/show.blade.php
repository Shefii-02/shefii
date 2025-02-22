@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="card shadow border rounded p-4">
        <h2 class="mb-3 text-primary">{{ $doc->title }}</h2>
        <p class="text-muted">{!! nl2br(e($doc->description)) !!}</p>

        @if($doc->code)
        <div class="mt-4">
            <h5>Code Example:</h5>
            <pre class="bg-light p-3 rounded" style="overflow-x:auto;"><code>{{ $doc->code }}</code></pre>
        </div>
        @endif
    </div>
</div>
@endsection
