@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($documents as $document)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$document->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{ route('book.show', [$document->doc_id]) }}" class="card-link">link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div><br/>
        @endforeach
            {{ $documents->links() }}
    </div>
@endsection
