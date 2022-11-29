@extends('components.layoutBack')

@section('content')

<h1>DashBoard Produits</h1>

<div class="dash_container_button">
    {{$products->links()}}
    <table class="table table-dark table_read">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Créer le</th>
            <th scope="col">Mise à jour le</th>
            <th scope="col">Nom</th>
            <th scope="col">Price</th>
            <th scope="col">Quantité</th>
            <th scope="col">Description</th>
            <th scope="col">image</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->created_at}}</td>
                <td>{{$product->updated_at}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->image}}</td>
            </tr>
        @endforeach
        </tbody>

    </table>
</div>

@endsection

