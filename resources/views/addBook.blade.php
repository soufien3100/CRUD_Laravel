
@extends('layout.base')
@section('title','Ajouter')
@section('css','addBook')

@section('content')
    <form action="addBook" method="POST">
        @csrf
        <div>
            <label for="titre_id">Titre </label>
            <input type="text" id="titre_id" name="title" >
        </div>
        <div>
            <label for="auteur_id">Auteur </label>
            <input type="text" id="auteur_id" name="author">
        </div>
        <div>
            <label for="synopsis_id">Synopsis</label>
            <input type="text" id="synopsis_id" name="synopsis">
        </div>
        <div>
            <label for="genre_id">Genre </label>
            <input type="text" id="genre_id" name="genre">
        </div>
        <div>
            <label for="date_id"> Année de publication </label>
            <input type="number" id="date_id" name="publication_year">
        </div>
        <button type="submit"> Envoyer !</button>
    </form>
@endsection