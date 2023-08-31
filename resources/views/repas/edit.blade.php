@extends('Admins.indexAdmin')
@section('content')


    <form action="{{ route('repas.update', $repa->id) }}" class="container" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <br />
        <br />
        <br />
        <br />
        <br />

        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $repa->nom }}" name='nom'
                placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">prix</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name='prix'
                value="{{ $repa->prix }}" placeholder="prix">
        </div>

        <label for="exampleFormControlInput1">type</label>
        <div class="form-group select-dropdown">
            
            {{-- <input type="text" class="form-control" id="exampleFormControlInput1" name='type'
                value="{{ $repa->type }}" placeholder="type"> --}}


                <select name="type" id=""  value="{{ $repa->type }}">
                
                    <optgroup label="Standard drinks">
                        <option value="Espresso">Espresso</option>
                        <option value="Thé">Thé</option>
                        <option value="Frappuccino">Frappuccino</option>
                        <option value="Cappuccino">Cappuccino</option>
                        <option value="Café crème">Café crème</option>
                        <option value="Ice tea">Ice tea</option>
                        <option value="Ice Coffée">Ice Coffée</option>
                        <option value="Fondue Au Chocolat">Fondue Au Chocolat </option>
                    </optgroup>
                    {{-- <optgroup label="Boissons Fraiches">
                        <option value="Boissons Fraiches">Boissons Fraiches </option>
                    </optgroup> --}}
                    <optgroup label="Sucré">
                        <option value="Pancake">Pancake</option>
                        <option value="Crêpe">Crêpe</option>
                        <option value="Gaufre">Gaufre</option>
                    </optgroup>
                    <optgroup label="Salé">
                        <option value="Crêpe salé">Crêpe sale</option>
                    </optgroup>
                    <optgroup label="Gold drinks">
                        <option value="Nos Jus">Nos Jus</option>
                        <option value="Cocktail">Cocktail</option>
                        <option value="Nos Smoothies">Nos Smoothies</option>
                        <option value="Milk shakes">Milk shakes</option>
                        <option value="Mojito">Mojito</option>
                        <option value="Detox">Detox</option>
                        <option value="Boissons Fraiches">Boissons Fraiches </option>
                    </optgroup>
                    
                    <option style="font-weight: bold;" value="Sandwich">Club Sandwich</option>
                    <option style="font-weight: bold;" value="Dessert">Dessert</option>
                    <option style="font-weight: bold;" value="à la carte">à la carte</option>
                    <option style="font-weight: bold;" value="Petits Déjeuners">Petits Déjeuners</option>
                    <option style="font-weight: bold;" value="Brunch">Brunch</option>
                    <option style="font-weight: bold;" value="Supplements">Supplements</option>
    
                </select>
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlTextarea1">description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $repa->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">image</label><br>
            <input src="{{ $repa->image }}" type="file"  id="exampleFormControlTextarea1"
                name="image" />

        </div>
        <button class="envoyer" type="submit" value="envoyer">update</button>
    </form>
@endsection
