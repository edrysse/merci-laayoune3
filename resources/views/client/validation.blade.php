@extends('client.command')

@section('validation')
<link rel="stylesheet" type="text/css" href={{ asset('clientpage/css/validation.css') }}>


<div class="container cntnr">
    
    <div class="row" style="width: 100%;
    margin: auto;">
    @if ($msg = Session::get('error'))
    <div class="alert alert-danger">
        <ul>
            
            <li>{{ $msg }}</li>
            
        </ul>
        
    </div>
@endif
        <div class="card checkout-order-summary">
            <div class="card-body">
                <div class="p-3 bg-light mb-3">
                    <h5 class="promotext" style="text-align: center;" class=" mb-0">Avez-vous un code promo? <a onclick="event.preventDefault(); return false;" style="color: #cf2227; " href=""><span class="promocode" onclick="afficheCodePromo()" >Cliquez ici pour saisir votre code</span></a></h5>
                </div>
                <form action="{{ route('coupon.add') }}">
                    <div class="py-3 bg-light mb-3 cardcoupon" id="coupon" >
                        <input type="text" class="form-control" name="code" placeholder="Saisir le code promo">   
                            <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4" style="    margin: 20px auto 0;">
                                Valider
                            </button>
                    </div>
                    <span class="right"></span>
                    <span class="left"></span>
                </form>
            </div>
        </div>
    </div>
    {{-- <script type="text/javascript" src="/public/clientpage/js/valildation.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        function afficheCodePromo() {
    var x = document.getElementById("coupon");
    if (x.style.display === "none") {
        x.style.display = "block";

    } else {
        x.style.display = "none";

    }
}
    </script>
    <div class="row">
        <div class="col-xl-8 mod-8">
            {{Session::get('discount')}}
            <div class="card">
                <div class="card-body">
                    <ol class="activity-checkout mb-0 px-4 mt-3">
                        <li class="checkout-item">
                            <div class="avatar checkout-icon p-1">
                                <div class="avatar-title rounded-circle">
                                    <i class="bx bxs-receipt text-white font-size-20"></i>
                                </div>
                            </div>
                            <div class="feed-item-list">
                                <div>
                                    <h5 class="font-size-16 mb-1">Billing Info</h5>
                                    <p class="text-muted text-truncate mb-4">Sed ut perspiciatis unde omnis iste</p>
                                    <div class="mb-3">

                                        @if ($errors->any())
                                            <div class="alert alert-danger">

                                                <ul>
                                                    
                                                    <li>Merci de remplire tous les champs indiqué par *</li>
                                                    
                                                </ul>
                                            </div>
                                        @endif


                                        <form action="{{ route('checkout.store') }}" method="post" id="form">
                                        @csrf
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-4 mod-4c">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="billing-name">Nom <span style="color: #cf2227">*</span></label>
                                                            <input type="text" class="form-control" name="nom" placeholder="Enter name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="billing-email-address">Email Address</label>
                                                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mod-4c">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="billing-name">Prenom <span style="color: #cf2227">*</span></label>
                                                            <input type="text" class="form-control" name="prenom" placeholder="Enter name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="billing-phone">Phone <span style="color: #cf2227">*</span></label>
                                                            <input type="text" class="form-control" name="phone" placeholder="Enter Phone no.">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="billing-address">Address <span style="color: #cf2227">*</span></label>
                                                    
                                                    <textarea class="form-control" name="adresse" rows="3" placeholder="Enter full address" id="adresseHidden" hidden></textarea>
                                                    <textarea class="form-control" name="adresse" rows="3" placeholder="Enter full address" id="adresse"></textarea>
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label class="form-label" for="billing-address">Notes de commande (facultatif)</label>
                                                    <textarea class="form-control" name="notes" rows="3" placeholder="Commentaires concernant votre commande, ex: consignes de livraison, les supplements..."></textarea>
                                                </div>

                                                {{-- <div>
                                                    <input type="radio" name="Pmethod" value="espece">
                                                    <label for="espece">Paiement à la livraison</label>
                                                    <input type="radio" name="Pmethod" value="CMI">
                                                    <label for="CMI">Paiement par carte bancaire</label>
                                                    <input type="radio" name="Pmethod" value="PayPal">
                                                    <label for="PayPal">Paiement par PayPal</label>

                                                    
                                                    <input type="hidden" value="{{ session('oid') }}" name="oid">
                                                </div> --}}

                                            </div>

                                            @php
                                                $n = 1;
                                            @endphp
                                            <textarea name="commande" id="" cols="30" rows="10" hidden>
                                            {{-- @foreach (session('ItemsCount') as $cartItem) --}}
                                            @foreach ($cartItems as $cartItem)
                                                Article {{$n}}: {{$cartItem->name}} ({{$cartItem->price}} DH x {{$cartItem->qty}}) |  
                                            @php
                                                $n++;
                                            @endphp
                                            @endforeach
                                            </textarea>


                                        {{-- <div class="valret mt-4">
                                            <div class="ret">
                                                <a href="clientMenu" class="btn btn-link text-muted ContinueSH">
                                                    <i class="mdi mdi-arrow-left me-1"></i> Retour au menu </a>
                                            </div> 
                                            <div >    
                                                <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                                                    Valider
                                                </button>
                                            </div> 
                                        </div>  --}}
                                        
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ol>
                </div>
            </div>


        </div>

        


        <div class="col-xl-4 mod-4">
            <div class="card checkout-order-summary">
                <div class="card-body">
                    <div class="p-3 bg-light mb-3">
                        <div class="avatar checkout-icon p-1">
                            <div class="avatar-title rounded-circle">
                                <i class="bx bxs-receipt text-white font-size-20"></i>
                            </div>
                        </div>
                        <h5 class="font-size-16 mb-0">Mode de livraison <span class="float-end ms-2"></span></h5>
                    </div>

                        <div class="Mlivraison">
                            <div>
                                <input type="radio" name="Mlivraison" id="" onclick="UnchoseLivraison()" value="Retirer sur place"> Retirer sur place
                            </div>
                            <div class="LD">
                                <input type="radio" name="Mlivraison" id="" onclick="ChoseLivraison()" value="Livraison à domicile"> Livraison à domicile (+15 DH)
                            </div>
                            
                        </div>

                </div>
            </div>

            <div class="card checkout-order-summary">
                <div class="card-body">
                    <div class="p-3 bg-light mb-3">
                        <h5 class="font-size-16 mb-0">Commande ID {{ session('oid') }} <span class="float-end ms-2"></span></h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-centered mb-0 table-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0" style="width: 110px;" scope="col">Product</th>
                                    <th class="border-top-0" scope="col">Product Desc</th>
                                    <th class="border-top-0" scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($cartItems) > 0)
                                    
                                
                                @php
                                $total = 0;
                                @endphp


                                @foreach ($cartItems as $cartItem)
                                        @php
                                            $total += $cartItem->price * $cartItem->qty;
                                        @endphp
                                        <tr>
                                        <th scope="row"><img src="{{$cartItem->model->image}}" alt="product-img" title="product-img" class="avatar-lg rounded"></th>
                                        <td>
                                            <h5 class="font-size-16 text-truncate">{{$cartItem->name}}</h5>
                                            <p class="text-muted mb-0 mt-1">{{$cartItem->price}} DH x {{$cartItem->qty}}</p>
                                        </td>
                                        <td>{{ $cartItem->price * $cartItem->qty }} DH</td>
                                    </tr>
                                    @endforeach



                                    
                                <tr class="bg-light">
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Subtotal:</h5>
                                    </td>
                                    <td>
                                        {{$total}} DH
                                    </td>
                                </tr>
                                <tr class="bg-light" id="trLivraison" style="display: none">
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Livraison:</h5>
                                    </td>
                                    <td>
                                        +15 DH
                                    </td>
                                </tr>
                                <tr class="bg-light" id="trdiscount" style="display: none">
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Réduction:</h5>
                                    </td>
                                    <td>
                                        -{{Session::get('discount')}}%
                                    </td>
                                </tr>
                                <tr class="bg-light">
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Total:</h5>
                                    </td>
                                    <td id="livrason1" style="display: none">
                                        {{($total + 15) - ($total + 15)*Session::get('discount')/100}} DH
                                    </td>
                                    <td id="livrason0">
                                        {{$total - $total*Session::get('discount')/100}} DH
                                    </td>
                                </tr>
                                {{-- <input type="hidden" value="{{$total + 15}}" name="prix"> --}}
                                <input type="hidden" value="{{$total}}" name="prix" id="total">
                                    
                                @else
                                <tr class="bg-light">
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Total:</h5>
                                    </td>
                                    <td>
                                        0 DH
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        

                        <script>
                            var trL = document.getElementById("trLivraison");
                            var trD = document.getElementById("trdiscount");
                            var tdL1 = document.getElementById("livrason1");
                            var tdL0 = document.getElementById("livrason0");
                            var total = document.getElementById("total");
                            var discount = "<?php Print(Session::get('discount')); ?>";
                            function ChoseLivraison() 
                            {
                                    trL.style.display = "table-row";
                                    tdL1.style.display = "table-cell";
                                    tdL0.style.display = "none";

                                    total.value = Number(total.value) + 15;
                                    total.value = (total.value) - (total.value)*discount/100;

                                    document.getElementById("adresse").removeAttribute("disabled");
                                    document.getElementById("adresse").innerHTML = "";
                                    document.getElementById("adresseHidden").innerHTML = "";


                            }
                            function UnchoseLivraison()    
                                {
                                    trL.style.display = "none";
                                    tdL1.style.display = "none";
                                    tdL0.style.display = "table-cell";

                                    total.value = (total.value) - (total.value)*discount/100;

                                    
                                    // document.getElementById("adresse").value = "Retirer sur place";
                                    document.getElementById("adresse").innerHTML = "Retirer sur place";
                                    document.getElementById("adresse").setAttribute("disabled", true);
                                    document.getElementById("adresseHidden").innerHTML = "Retirer sur place";

                                }
                            if (discount > 0)
                            {
                                trD.style.display = "table-row";
                            }
                                console.log(MyJSStringVar);
                        </script>



                        <div class="mt-3">

                            <div class="paymenticons">
                                <input type="radio" name="Pmethod" value="espece"><span>Paiement en espèce</span> <br>
                            </div>
                            
                            
                            <div class="paymenticons">
                                <input type="radio" name="Pmethod" value="CMI"><span>Paiement par carte bancaire</span> <br>
                            <img src="clientpage/images/payment/cards.png" alt="" width="100px">
                            </div>
                            
                            <div class="paymenticons">
                                <input type="radio" name="Pmethod" value="PayPal"><span>Paiement par PayPal</span>
                            <img src="clientpage/images/payment/paypalcards.jpg" alt="" width="120px">
                            </div>
                            
                            

                            
                            <input type="hidden" value="{{ session('oid') }}" name="oid">
                        </div>
                    
                    <p style="font-size: 0.75em" class="my-3">
                        Vos données personnelles seront utilisées pour le traitement de votre commande, 
                        vous accompagner au cours de votre visite du site web, et pour d’autres raisons décrites dans notre 
                        <a href="{{ route('politique') }}" style="font-size: 1em; font-weight:bold; color:black" class="politique">politique de confidentialité.</a> 
                    </p>
                    <div class="valret mt-4">
                        <div class="ret">
                            <a href="clientMenu" class="btn btn-link text-muted ContinueSH">
                                <i class="mdi mdi-arrow-left me-1"></i> Retour au menu </a>
                        </div> 
                        <div >    
                            <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                                Valider
                            </button>
                        </div> 
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- end row -->
    
</div>






 
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="card col-md-4 bg-white shadow-md p-5">
                <div class="mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                        fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                    </svg>
                </div>
                <div class="text-center">
                    <h1>Thank You !</h1>
                    <p>We've send the link to your inbox. Lorem ipsum dolor sit,lorem lorem </p>
                    <button class="btn btn-outline-success">Back Home</button>
                </div>
            </div>
        
        </div>
    </div>
  </div>





<script src="assets/js/jquery.js"></script>
@if ($msg = Session::get('thanks'))


    @php
         echo '<script type="text/javascript">
            $(document).ready(function(){
                $("#exampleModalCenter").modal("show");
            });
        </script>';
    @endphp
    
@endif


@endsection
