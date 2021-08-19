
@extends('layout.base')
@section('title','book')
@section('css','book')

@section('content')
    <table>
        <th>Titre</th>
        <th>genre</th>
        <th>Annee de publication</th>
        <th>Résumé</th>
    </table>
    <td>{{$book->title}}</td>
    <td>{{$book->genre}}</td>
    <td>{{$book->author}}</td>
    <td>{{$book->publication_year}}</td>
    <td>{{$book->synopsis}}</td>

   
@endsection