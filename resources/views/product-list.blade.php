@extends('components.layoutFront')
@section('content')

    <div id="carouselPromo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img id="1" class="d-block w-100" src="storage/image/Flyer1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img id="2" class="d-block w-100" src="storage/image/Flyer2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img id="3" class="d-block w-100" src="storage/image/Flyer3.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselPromo" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselPromo" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>

    <div id="searchbar" class="item search right" tabindex="0">
        <div class="search-group">
            <select>
                <option value="all">All</option>
                <option value="all">Voyage</option>
                <option value="all">Réalité virtuel</option>
                <option value="all">Nos Promos</option>
            </select>
            <input type="text">
            <i class="material-icons search-icon">
                Q
            </i>
        </div>
    </div>


    <h1 id="Vr">Voyage</h1>

    <div class="Voyage">
        <div id="Voyage1">
            <img src="https://imgs.search.brave.com/fyqk-Ycyx0_SxQHAtKdJr9MVxaUvklRSkz-kDLffwaE/rs:fit:660:803:1/g:ce/aHR0cHM6Ly92b3lh/Z2Utb25pcmlxdWUu/Y29tL3dwLWNvbnRl/bnQvdXBsb2Fkcy8y/MDE5LzEyLzAyY2Q3/ZDMyLmpwZw"
                 id="PhotoParis" alt="Photo Paris">
            <h2>Paris</h2>
            <h3>Un voyage a paris</h3>
            <a href="{{ url ('/product/1') }}">
                <button class="myButton">109,99$</button>
            </a>
        </div>
        <div id="Voyage2">
            <img src="https://imgs.search.brave.com/C0d5EEh9U9wQfBnebzyV_5ZFNvw8m7v0_tGFOUxScIg/rs:fit:800:800:1/g:ce/aHR0cHM6Ly9qb2hh/bm5lbGF6dXJlLmNv/bS93cC1jb250ZW50/L3VwbG9hZHMvMjAx/OS8wMy9wbGVpbmUt/bHVuZS0zLmpwZw"
                 id="PhotoMoon" alt="Photo Lune">
            <h2>La lune</h2>
            <h3>Voyager dans l'espace</h3>
            <a href="{{ url ('/product/2') }}">
                <button class="myButton">109,99$</button>
            </a>
        </div>
        <div id="Voyage3">
            <img src="https://imgs.search.brave.com/BrijUr8tdziiBmtrILcFz8nySRu2_RGIl1nOkFeCngo/rs:fit:773:500:1/g:ce/aHR0cHM6Ly93d3cu/Y29tcHRvaXIuZnIv/aW1nUHJvZHVpdHMv/SlBOLzI0NTgwOS5v/cmkuanBn"
                 id="PhotoTokyo" alt="Photo Tokyo">
            <h2>Tokyo</h2>
            <h3>Un voyage a tokyo</h3>
            <a href="{{ url ('/product/3') }}">
                <button class="myButton">109,99$</button>
            </a>
        </div>
        <div id="Voyage4">
            <img src="https://imgs.search.brave.com/ZdhsR9QV8pbCqiVrMdxU7HjY54_qk4A1eZlcei1s4hA/rs:fit:960:640:1/g:ce/aHR0cHM6Ly93d3cu/dHJpcHNhdnZ5LmNv/bS90aG1iL01BNXJi/YWFINE5VMnQ1Vk4z/ZVY2SHlvb202az0v/OTYweDAvZmlsdGVy/czpub191cHNjYWxl/KCk6bWF4X2J5dGVz/KDE1MDAwMCk6c3Ry/aXBfaWNjKCkvcm9h/ZC1pbi1jaXR5LWFn/YWluc3Qtc2t5LTkz/NzQzNDgwOC01YzJk/MmM3MDQ2ZTBmYjAw/MDE1YTE0N2UuanBn"
                 id="PhotoLA" alt="Photo Los Angeles">
            <h2>Los Angeles</h2>
            <h3>Voyage a L.A</h3>
            <a href="{{ url ('/product/4') }}">
                <button class="myButton">109,99$</button>
            </a>
        </div>
    </div>


    <h1 id="Vr">VR</h1>
    <div class="VR">
        <div id="VR1">
            <img src="https://imgs.search.brave.com/2n22q3I7DSDQ95EcE-qDcLbzimrhSKTQuhY82eR46R4/rs:fit:1000:931:1/g:ce/aHR0cHM6Ly93d3cu/cm9ib3QtYWR2YW5j/ZS5jb20vb3JpLW9j/dWx1cy1yaWZ0LWNh/c3F1ZS12ci0yMjEx/LmpwZw"
                 id="Casque_VR1" alt="CASQUE VR">
            <h2>CASQUE VR 1</h2>
            <a href="{{ url ('/product/5') }}">
                <button class="myButton">109,99$</button>
            </a>
        </div>
        <div id="VR2">
            <img src="https://imgs.search.brave.com/X1fUG79BbchIYzXjL_xURKKtBHlrsIqiMv8ugjY8vVM/rs:fit:880:722:1/g:ce/aHR0cHM6Ly9tbHN0/YXRpY3F1aWMtYS5h/a2FtYWloZC5uZXQv/bGVudGVzLXJlYWxp/ZGFkLXZpcnR1YWwt/RF9OUV9OUF83NTcz/MDctTUxVMzIwMjkx/NDE2OTRfMDgyMDE5/LUYuanBn"
                 id="CASQUE_VR2" alt="CASQUE VR2">
            <h2>CASQUE VR 2</h2>
            <a href="{{ url ('/product/6') }}">
                <button class="myButton">109,99$</button>
            </a>
        </div>
    </div>

@endsection
