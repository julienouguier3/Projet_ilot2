@extends('components.layoutFront')

@section('content')
    <div class="all-box-id">
        <div class="maindiv-id">
            <div class="maindiv-top1">
                <div class="maindiv-id1">
                    <img class="img-id" src="../storage/image/moon-id.jpg" alt="moon">
                </div>
                <div class="maindiv-id2">
                    <h1>{{$product->name}}</h1>
                    <form class="form_id" method="post" action="/">
                        <p class="text_id_form"><strong>Prix : {{$product->price}} </strong></p> <br>
                        <p class="text_di_form"> TVA incluse (si applicable), plus frais de livraison</p> <br>
                        <input type="hidden" name="id" value="{{$product->id}}"/>
                        <label for="quantite"><strong>Quantité : </strong></label>
                        <input class="qty-id" type="number" name="qty" value="1"/> <br>
                        <p><strong>Option supplémentaire :</strong></p>
                        <label for="goodies">Un goodies surprise</label>
                        <input type="checkbox" class="checkbox-id" name="goodies" value="goodies"><br>
                        <label for="food">Repas thématique</label>
                        <input type="checkbox" class="checkbox-id" name="food" value="food"><br>
                        <input class="myButton" type="submit" value="Ajouter au panier"/>
                        <br>
                        <p>Avis de 22 acheteurs :</p>
                        <img class="img_avis_id" src="../storage/image/stars-id.png" alt="image avis">
                        <p>4.5/5</p>
                    </form>
                </div>
            </div>
            <div class="maindiv-top2">
                <div class="desc-id">
                    <h2 class="title-desc-id">Description :</h2>
                    <p class="txt-desc-id">
                        {{$product->description}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php
//$sqlQuery = 'SELECT * FROM product';
//$allproduct = $connection->prepare($sqlQuery);
//$allproduct->execute();
//$allprod = $allproduct->fetchAll();
//
//echo 'la liste des noms est :';
//foreach ($allprod as $prod) {
//    echo "<p>" . $prod['NAME'] . "</p>";
//}
    ?>

@endsection
