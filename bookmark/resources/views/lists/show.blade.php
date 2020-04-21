@extends('layouts.master')

@section('head')
    
@endsection

@section('title')
    My List
@endsection

@section('content')

    @if($books->count() == 0)
        <p>You have not added any books to your list yet.</p>
        <p>Start building your list by checking out the <a href='/books'>books in our library...</a></p>
    @else

        @foreach($books as $book)
        <div class='book'>
            <a href='/books/{{ $book->slug }}'><h2>{{ $book->title }}</h2></a>
            @if($book->author)
                <p>By {{ $book->author->first_name. ' ' . $book->author->last_name }}</p>
            @endif

            <p class='notes'>
                {{ $book->pivot->notes }}
            </p>

            <p class='added'>
                Added {{ $book->pivot->created_at->diffForHumans() }}
            </p>
        </div>
        @endforeach

    @endif

@endsection
