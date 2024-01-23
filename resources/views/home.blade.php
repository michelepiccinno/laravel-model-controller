@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row row-cols-5 d-flex g-4 pt-5">
            @foreach ($movies as $movie)
                <div class="card text-center">
                    <div class="card-title border">
                        <h3>TITLE</h3>
                        <span>{{ $movie->title }}</span>
                    </div>
                    <div class="card-text border">
                        <h5 class="original-title">ORIGINAL TITLE: <span>{{ $movie->original_title }}</span></h5>
                        <h6 class="nationality">NATIONALITY: <span>{{ $movie->nationality }}</span></h6>
                        <h6>DATE: <span>{{ $movie->date }}</span></h6>
                        <span>VOTE: <span>{{ $movie->vote }}</span></span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
