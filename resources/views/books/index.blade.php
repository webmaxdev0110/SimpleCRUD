@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if($books->isNotEmpty())
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>ISBN</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Publisher</th>
                            <th>Date Publish</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $k => $book)
                          <tr>
                            <td>{{ $k }}</td>
                            <td>{!! $book->isbn !!}</td>
                            <td>{!! $book->author !!}</td>
                            <td>{!! $book->title !!}</td>
                            <td>{!! $book->publisher !!}</td>
                            <td>{!! $book->human_publish_date !!}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      @else
                          <p>Book is empty</p>
                          <a href="{{ route('books.create') }}" class="btn btn-primary"> Input new book</a>
                      @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
