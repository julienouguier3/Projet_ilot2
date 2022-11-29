@extends('components.layoutBack')

@section('content')

    <h1>Mise à jour d'un produit</h1>

    <div class="form_create">
        <form method="post" action="{{route('backoffice.product.updatesave', [$product->id])}}">
            @csrf
            <input type="hidden" name="id" value="{{$product->id}}">
            <div class="form-group">
                <label for="id">Entrer l'ID du produit à mettre à jour</label>
                <input type="text" class="form-control" name="id" id="id" placeholder="ID" required="required"
                       value="{{$product->id}}">
            </div>
            <div class="form-group">
                <label for="name">Entrer le nom du produit</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nom"
                       value="{{$product->name}}">
            </div>
            <div class="form-group">
                <label for="price">Entrer le prix du produit</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Prix"
                       value="{{$product->price}}">
            </div>
            <div class="form-group">
                <label for="quantity">Entrer la quantité du produit</label>
                <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantité"
                       value="{{$product->quantity}}">
            </div>
            <div class="form-group">
                <label for="image">Entrer l'image du produit</label>
                <input type="text" class="form-control" name="image" id="image" placeholder="Quantité"
                       value="{{$product->image}}">
            </div>
            <div class="form-group desc_create">
                <label for="description">Entrer la description du produit</label>
                <textarea id="description" name="description" cols="25" rows="10"
                          placeholder="Decription produit">{{$product->description}}</textarea>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required="required">
                <label class="form-check-label" for="exampleCheck1">Je suis sûr de vouloir modifier ce produit</label>
            </div>
            <br>
            <button type="submit" value="Submit" class="myButton">Update</button>
        </form>
    </div>

    <div class="cancel_create">
        <a href="{{route('backoffice.dashboard.dashboard')}}">
            <button class="myButton">Annuler</button>
        </a>
    </div>

@endsection
