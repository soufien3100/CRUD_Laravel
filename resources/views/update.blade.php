@extends('layout.base')
@section('css','update')
@section('title','Modifier')

@section('content')


    <h1 class="title">Modifier un livre</h1>
    <div>
        <form action="/updateBook" method="POST">
            @csrf
            <input type="hidden" id="id" name="id" value="{{$book->id}}>
            <div>
                <label for="titre_id">Titre </label>
                <input type="text" id="titre_id" name="title"  value="{{$book->title}}">
            </div>
            <div>
                <label for="auteur_id">Auteur </label>
                <input type="text" id="auteur_id" name="author" value="{{$book->author}}"  >
            </div>
            <div>
                <label for="synopsis_id">Synopsis</label>
                <input type="text" id="synopsis_id" name="synopsis" value="{{$book->synopsis}}" >
            </div>
            <div>
                <label for="genre_id">Genre </label>
                <input type="text" id="genre_id" name="genre" value="{{$book->genre}}" >
            </div>
            <div>
                <label for="date_id"> Année de publication </label>
                <input type="number" id="date_id" name="publication_year" value="{{$book->publication_year}}" >
            </div>
        <button> Modifier ! </button>
        </form>
    </div>
@endsection