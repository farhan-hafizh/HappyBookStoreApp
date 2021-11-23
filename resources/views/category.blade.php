@extends('template.main')

@section('content-main')
        @foreach ($books as $item)
            @if ($loop->first)
            <h2>Book List - Category: {{$item->book->category->category}} </h2>
            <table class="w-100">
                <tr class="table-title">
                    <td>Title</td>
                    <td>Author</td>
                </tr>
            @endif
            <tr>
                <td>    
                    <a href="/book/{{ $item->id }}">{{ $item->book->title }}</a>
                </td>
                <td>
                    {{ $item->author }}
                </td>
            </tr>       
        @endforeach
    </table>
@endsection