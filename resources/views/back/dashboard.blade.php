
@extends('components.layoutBack')

@section('content')

<h1>DashBoard</h1>

<div class="container">

    <div class="dash_container_button">
        <a href="{{ url('backoffice/product/create') }}">
        <button class="myButton" >Ajouter produits</button>
        </a>

        <a href="{{ url('backoffice/product/read') }}">
            <button class="myButton" >Afficher produits</button>
        </a>

        <a href="{{ url('backoffice/product/update') }}">
            <button class="myButton" >Mise à jour produits</button>
        </a>

        <a href="{{ url('backoffice/product/delete') }}">
            <button class="myButton" >Supprimer produits</button>
        </a>
    </div>
</div>

@endsection
