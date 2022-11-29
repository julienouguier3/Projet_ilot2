@extends('components.layoutFront')

@section('content')
    <div class="all_box">
        <h1>C A R T</h1>
        <section id="CartProducts">

            {{--Exemple Carte Produit (START)--}}
            <div class="CartProductCard">
                <div class="CartAlignPhoto">
                    <a href=""> {{--URL Produit--}}
                        <img src="../storage/image/VR_Mask.jpeg"
                             alt="Image d'une personne portant un masque de VR 'eTravel'" !>
                    </a>
                    <div class="CartNamePrice">
                        <h2 class="CartProductName">
                            Product Name
                        </h2>
                        <div class="CartProductLeftSide">
                            <p>
                                499.99 $
                            </p>
                            <div id="CartNbItems">
                                <button
                                        id="CartSubtractButton"
                                        type="button">-
                                </button>
                                <p>
                                    3
                                </p>
                                <button
                                        id="CartPlusButton"
                                        type="button">+
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--Exemple Carte Produit (END)--}}

        </section>

        <section id="CartBuyPart">
            <div>
                <form id="CartFormBuy">
                    <label for="CartDiscountCode"></label>
                    <input
                            type="text"
                            name="discount"
                            id="CartDiscountCode"
                            placeholder=" ENTER A DISCOUNT CODE :"
                    >
                    <button
                            class="CartButton"
                            id="CartDiscountCodeButton"
                            type="button">APPLY CODE
                    </button>
                    <p id="CartAlertDiscount">
                        /!\ "PROMO" code valide -25% /!\
                    </p>
                    <p id="CartPrice">
                        1499.97 $
                    </p>
                    <button
                            class="CartButton"
                            id="CartBuyButton"
                            type="button">BUY
                    </button>
                </form>
            </div>
        </section>
    </div>
@endsection
