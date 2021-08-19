
@extends('layout.base')
@section('css','books')
@section('title','Books')

@section('content')
<h1>Livres</h1>

<table>
    <tr>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Date</th>
        <th>Genre</th>
    </tr>
    @foreach ($books as $book )
    <tr>
        <td><a href="book/{{$book->id}}">{{$book->title}}</a></td>
        <td>{{$book->author}}</a></td>
        <td>{{$book->genre}}</a></td>
        <td>{{$book->publication_year}}</a></td>
        <td>
            <form action="deleteBook" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $book->id }}" >
                <input type="submit" value="x">
            </form>
        </td>
        <td>
            <form action="/update" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$book->id}}">
                <input type="submit" value="Modifier">
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection