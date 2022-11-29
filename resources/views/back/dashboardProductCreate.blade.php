@extends('components.layoutBack')

@section('content')
    <h1>Créer un nouveau produit</h1>

<div class="contain_all_create">
    <div class="form_create">
        <form class="form_create_style" method="post" action="">
            @csrf
            <div class="form-group">
                <label for="name">Entrer le nom du produit</label>
                <input type="text" class="form-control" id="name" placeholder="Nom" required="required" name="name">
            </div>
            <div class="form-group">
                <label for="prix">Entrer le prix du produit</label>
                <input type="text" class="form-control" id="prix" placeholder="Prix" required="required" name="price">
            </div>
            <div class="form-group">
                <label for="quantity">Entrer la quantité du produit</label>
                <input type="text" class="form-control" id="quantity" placeholder="Quantité" required="required" name="quantity">
            </div>
            <div class="form-group">
                <label for="image">Entrer une image du produit</label>
                <input type="text" class="form-control" id="image" placeholder="image" required="required" name="image">
            </div>
            <div class="form-group desc_create">
                <label for="description">Entrer la description du produit</label>
                <textarea id="description" name="description" cols="25" rows="10"
                          placeholder="Decription produit"></textarea>
            </div>
            <br>
            <button type="submit" value="Submit" class="myButton2">Create</button>
        </form>

    </div>
    <div class="cancel_create">
    <a href="{{route('backoffice.dashboard.dashboard')}}" >
        <button class="myButton">Annuler</button></a>
    </div>
</div>
@endsection

