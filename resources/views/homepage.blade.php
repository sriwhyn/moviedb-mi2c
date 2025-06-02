@extends('layout.template')

@section('content')
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
           {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

<h1>Latest Movie</h1>
 <div class="row">
    @foreach ($movies as $movie)


            <div class="col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="{{ asset('storage/'.$movie->cover_image) }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">"{{ $movie->title}}"</h5>
                    <p class="card-text">"{{ Str::words($movie->synopsis, 20, '...') }}"</p>
                    <a href="{{ route('movies.detail', $movie->id) }}" class="btn btn-success">See More</a>
                </div>
                </div>
            </div>
            </div>
 </div>
 @endforeach
 {{ $movies -> links()}}
 </div>
@endsection