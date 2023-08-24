@extends('Admins.indexAdmin')
@section('content')
    <form action="{{ route('repas.store') }}" class="container" method="post" enctype="multipart/form-data">
        @csrf
        <br />
        <br />
        <br />
        <br />
        <br />
<style>
        .form-control {
            /* background-color: white; */
            border-radius: 10px;
            /* border: 2px solid #d9d9d9; */
            
        }
        .form-control:focus {
        /* background-color: rgb(255, 255, 255); */
        /* border-color: #ec1d25; */
        border: 2px solid #ec1d25;
        color: #aaa;
    }


    option:checked, option:hover {
        background-color: #d9d9d9;
        }
        
    .select-dropdown,
    .select-dropdown * {
        margin: 0;
        padding: 0;
        position: relative;
        box-sizing: border-box;
    }
    .select-dropdown {
        position: relative;
        background-color: #2A3038;
        /* border: 2px solid #d9d9d9; */
        border-radius: 10px
    }
    .select-dropdown select {
        font-size: 1rem;
        font-weight: normal;
        width: 100%;
        padding: 8px 24px 8px 10px;
        border: none;
        background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
        appearance: none;
        color: #6C7293;

    }
    .select-dropdown select:active, .select-dropdown select:focus {
        outline: none;
        box-shadow: none;
    }
    .select-dropdown:after {
        content: "";
        position: absolute;
        top: 50%;
        right: 8px;
        width: 0;
        height: 0;
        margin-top: -2px;
        border-top: 5px solid #aaa;
        border-right: 5px solid transparent;
        border-left: 5px solid transparent;
    }
    input[type="file"]::file-selector-button {
        border-radius: 4px;
        padding: 0 16px;
        height: 40px;
        cursor: pointer;
        background-color: white;
        border: 2px solid #d9d9d9;
        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
        margin-right: 16px;
        transition: background-color 200ms;
    }

    /* file upload button hover state */
    input[type="file"]::file-selector-button:hover {
    background-color: #f3f4f6;
    }

    /* file upload button active state */
    input[type="file"]::file-selector-button:active {
        background-color: #e5e7eb;
    }

    label  {
        color: #ffffff;
        font-family: Montserrat;
        font-weight: 600;
        font-size: 15px;
    }
    .envoyer {
        border-radius: 4px;
        padding: 0 16px;
        height: 40px;
        cursor: pointer;
        background-color: white;
        border: 2px solid #d9d9d9;
        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
        margin-right: 16px;
        transition: background-color 200ms;
    }

    /* file upload button hover state */
    .envoyer:hover {
    background-color: #f3f4f6;
    }

    /* file upload button active state */
    .envoyer:active {
        background-color: #e5e7eb;
    }

    label  {
        color: #ffffff;
        font-family: Montserrat;
        font-weight: 600;
        font-size: 15px;
    }
    .ContinueSH:hover {
    color: #e5e7eb !important;
}
</style>
        <div class="form-group">
            <label for="exampleFormControlInput1">nom</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='nom' placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">prix</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='prix' placeholder="prix">
        </div>
        <label for="exampleFormControlInput1">type</label>
        <div class="form-group select-dropdown" style="margin-bottom: 16px">
            
            <select name="type" id="">
                <option value="lunch">lunch</option>
                <option value="dinner">dinner</option>
                <option value="breakfast"> breakfast</option>
                <option value="starters">starters</option>
                <option value="drink">drink</option>
                <option value="dessert">dessert</option>
                <option value="main">main</option>

            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">ajouter une image</label><br>
            <input type="file"  name="image" />
        </div>
        <div style="display: flex; justify-content: flex-start; align-items: center;">
            <button class="envoyer" type="submit" value="envoyer">envoyer</button>
        {{-- <a href="" class="btn envoyer" style="color:#2A3038">retour au menu</a> --}}
        {{-- <div class="ret">
            <a href="repas" class="btn btn-link text-muted " style="text-decoration: none; font-size:1em; ">
                 <span class="ContinueSH" style="color:#ffffff">Retour au menu <i class="mdi mdi-arrow-right me-1"></i></span> </a>
        </div>  --}}
        </div>
        
    </form>
    
@endsection
