@php
    use App\Http\Controllers\Backoffice\ProductController;
    use App\Models\Product;
@endphp

@extends('components.layoutBack')

@section('content')
    <style>.myButton {
            box-shadow: 5px 8px 9px -3px;
            font-size: 12px;
            padding: 10px 25px;
        }</style>
    <h1>Liste produits</h1>

    <div class="container">

        <a href="{{ action([ProductController::class, 'create']) }}">
            <button class="myButton addbtn">Ajouter produits</button>
        </a>
        <a href="{{ action([ProductController::class, 'read']) }}">
            <button class="myButton addbtn">Afficher détails produits</button>
        </a>
        <div class="dash_container_button">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td><a href="{{ action([ProductController::class, 'update'], $product->id) }}">
                                <button class="myButton Tab">Mise à jour produits</button>
                            </a>

                            <a href="{{ action([ProductController::class, 'delete'], $product->id) }}">
                                <button class="myButton Tab">Supprimer produits</button>
                            </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
