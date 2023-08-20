@extends('client.command')

@section('validation')


<style>
    .card {
        margin-bottom: 24px;
        -webkit-box-shadow: 0 2px 3px #e4e8f0;
        box-shadow: 0 2px 3px #e4e8f0;
    }
    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 100%;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #eff0f2;
        border-radius: 1rem;
    }
    .activity-checkout {
        list-style: none
    }
    
    .activity-checkout .checkout-icon {
        position: absolute;
        top: -4px;
        left: -24px
    }
    
    .activity-checkout .checkout-item {
        position: relative;
        padding-bottom: 24px;
        padding-left: 35px;
        border-left: 2px solid #f5f6f8
    }
    
    .activity-checkout .checkout-item:first-child {
        border-color: #3b76e1
    }
    
    .activity-checkout .checkout-item:first-child:after {
        background-color: #3b76e1
    }
    
    .activity-checkout .checkout-item:last-child {
        border-color: transparent
    }
    
    .activity-checkout .checkout-item.crypto-activity {
        margin-left: 50px
    }
    
    .activity-checkout .checkout-item .crypto-date {
        position: absolute;
        top: 3px;
        left: -65px
    }
    
    
    
    .avatar-xs {
        height: 1rem;
        width: 1rem
    }
    
    .avatar-sm {
        height: 2rem;
        width: 2rem
    }
    
    .avatar {
        height: 3rem;
        width: 3rem
    }
    
    .avatar-md {
        height: 4rem;
        width: 4rem
    }
    
    .avatar-lg {
        height: 5rem;
        width: 5rem
    }
    
    .avatar-xl {
        height: 6rem;
        width: 6rem
    }
    
    .avatar-title {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #111111;
        color: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        font-weight: 500;
        height: 100%;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 100%
    }
    
    .avatar-group {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding-left: 8px
    }
    
    .avatar-group .avatar-group-item {
        margin-left: -8px;
        border: 2px solid #fff;
        border-radius: 50%;
        -webkit-transition: all .2s;
        transition: all .2s
    }
    
    .avatar-group .avatar-group-item:hover {
        position: relative;
        -webkit-transform: translateY(-2px);
        transform: translateY(-2px)
    }
    
    .card-radio {
        background-color: #fff;
        border: 2px solid #eff0f2;
        border-radius: .75rem;
        padding: .5rem;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        display: block
    }
    
    .card-radio:hover {
        cursor: pointer
    }
    
    .card-radio-label {
        display: block
    }
    
    .edit-btn {
        width: 35px;
        height: 35px;
        line-height: 40px;
        text-align: center;
        position: absolute;
        right: 25px;
        margin-top: -50px
    }
    
    .card-radio-input {
        display: none
    }
    
    .card-radio-input:checked+.card-radio {
        border-color: #3b76e1!important
    }
    
    
    .font-size-16 {
        font-size: 16px!important;
    }
    .text-truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    
    a {
        text-decoration: none!important;
    }
    
    
    .form-control {
        display: block;
        width: 100%;
        padding: 0.47rem 0.75rem;
        font-size: .875rem;
        font-weight: 400;
        line-height: 1.5;
        color: #545965;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #e2e5e8;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.75rem;
        -webkit-transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
        transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    }
    
    .edit-btn {
        width: 35px;
        height: 35px;
        line-height: 40px;
        text-align: center;
        position: absolute;
        right: 25px;
        margin-top: -50px;
    }
    
    .ribbon {
        position: absolute;
        right: -26px;
        top: 20px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        color: #fff;
        font-size: 13px;
        font-weight: 500;
        padding: 1px 22px;
        font-size: 13px;
        font-weight: 500
    }




    @media (min-width: 1200px)
        { .mod-8{
            flex: 0 0 60%;
            max-width: 60%;
        }
        }
        
    @media (min-width: 1200px)
        { .mod-4{
            flex: 0 0 40%;
            max-width: 40%;
        }
        }
    


    .mod-4c {
    max-width: 50%;
    flex: 0 0 50%;
    }

    @media (max-width: 567px){
        .mod-4c {
            max-width: 100%;
            flex: 0 0 100%;
        }
    }

    .valret{
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    @media (max-width: 539px){
        .valret{
            flex-direction: column-reverse;
        }
        .ret {
            margin-top: 1rem;
        }
    }
    
    .ContinueSH:hover {
    color: #cf2227 !important;
}

    
</style>

<div class="container">

    <div class="row">
        <div class="col-xl-8 mod-8">

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
                                                {{-- <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul> --}}
                                                <ul>
                                                    
                                                    <li>Merci de remplire tous les champs indiqué par *</li>
                                                    
                                                </ul>
                                            </div>
                                        @endif

                                        <form action="{{ route('comnd.store') }}" method="post" id="form">
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
                                                    {{-- <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="billing-email-address">Email Address</label>
                                                            <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email">
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="billing-phone">Phone</label>
                                                            <input type="text" class="form-control" id="billing-phone" placeholder="Enter Phone no.">
                                                        </div>
                                                    </div> --}}
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="billing-address">Address <span style="color: #cf2227">*</span></label>
                                                    <textarea class="form-control" name="adresse" rows="3" placeholder="Enter full address"></textarea>
                                                </div>

                                                {{-- <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-4 mb-lg-0">
                                                            <label class="form-label">Country</label>
                                                            <select class="form-control form-select" title="Country">
                                                                <option value="0">Select Country</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AS">American Samoa</option>
                                                                <option value="AD">Andorra</option>
                                                                <option value="AO">Angola</option>
                                                                <option value="AI">Anguilla</option>                                   
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-4 mb-lg-0">
                                                            <label class="form-label" for="billing-city">City</label>
                                                            <input type="text" class="form-control" id="billing-city" placeholder="Enter City">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-0">
                                                            <label class="form-label" for="zip-code">Zip / Postal code</label>
                                                            <input type="text" class="form-control" id="zip-code" placeholder="Enter Postal code">
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            {{-- <input type="hidden" name="commande" value="
                                            {{ 
                                                @php
                                                    $n = 1;
                                                @endphp
                                                @foreach ($cartItems as $cartItem)
                                                Article {{$n.<br>}}: 
                                                {{$cartItem->name.<br>}} 
                                                {{$cartItem->price}} DH x {{$cartItem->qty}} {{<br>}}
                                                ----------------------------------- {{<br>}}
                                                @php
                                                    $n++;
                                                @endphp
                                                @endforeach
                                            }}"> --}}

                                            {{-- @php
                                                $n = 1;
                                            @endphp
                                            
                                            @foreach ($cartItems as $cartItem)
                                                Article {{$n}}: 
                                                {{$cartItem->name}} 
                                                {{$cartItem->price}} DH x {{$cartItem->qty}} 
                                            ----------------------------------- 
                                            @php
                                                $n++;
                                            @endphp
                                            @endforeach --}}
                                            
                                            
                                            {{-- @php
                                                $n = 1;
                                            @endphp
                                            <textarea name="" id="" cols="50" rows="50">
                                            @foreach ($cartItems as $cartItem)
                                            Article {{$n}}: 
                                            {{$cartItem->name}} 
                                            {{$cartItem->price}} DH x {{$cartItem->qty}} 
                                            ----------------------------------- 
                                            @php
                                                $n++;
                                            @endphp
                                            @endforeach
                                        </textarea> --}}

                                        {{-- @if (session('ItemsCount') !== null)
                                            
                                        @endif --}}
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

                                            {{-- {{session('ItemsCount')}} --}}


                                        {{-- <div class="row my-4">
                                            <div class="col">
                                                <a href="clientMenu" class="btn btn-link text-muted ContinueSH">
                                                    <i class="mdi mdi-arrow-left me-1"></i> Retour au menu </a>
                                            </div> 
                                            <div class="col" style="display: flex;justify-content: flex-end;">
                                                <div class="text-end mt-2 mt-sm-0">
                                                    
                                                        <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                                                            Valider
                                                        </button>
                                                </div>
                                            </div> 
                                        </div>  --}}

                                        <div class="valret mt-4">
                                            <div class="ret">
                                                <a href="clientMenu" class="btn btn-link text-muted ContinueSH">
                                                    <i class="mdi mdi-arrow-left me-1"></i> Retour au menu </a>
                                            </div> <!-- end col -->
                                            <div >    
                                                <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                                                    Valider
                                                </button>
                                            </div> 
                                        </div> 
                                        
                                        
                                        
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        {{-- <li class="checkout-item">
                            <div class="avatar checkout-icon p-1">
                                <div class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bxs-truck text-white font-size-20"></i>
                                </div>
                            </div>
                            <div class="feed-item-list">
                                <div>
                                    <h5 class="font-size-16 mb-1">Shipping Info</h5>
                                    <p class="text-muted text-truncate mb-4">Neque porro quisquam est</p>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-6">
                                                <div data-bs-toggle="collapse">
                                                    <label class="card-radio-label mb-0">
                                                        <input type="radio" name="address" id="info-address1" class="card-radio-input" checked="">
                                                        <div class="card-radio text-truncate p-3">
                                                            <span class="fs-14 mb-4 d-block">Address 1</span>
                                                            <span class="fs-14 mb-2 d-block">Bradley McMillian</span>
                                                            <span class="text-muted fw-normal text-wrap mb-1 d-block">109 Clarksburg Park Road Show Low, AZ 85901</span>
                                                           
                                                            <span class="text-muted fw-normal d-block">Mo. 012-345-6789</span>
                                                        </div>
                                                    </label>
                                                    <div class="edit-btn bg-light  rounded">
                                                        <a href="#" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit">
                                                            <i class="bx bx-pencil font-size-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6">
                                                <div>
                                                    <label class="card-radio-label mb-0">
                                                        <input type="radio" name="address" id="info-address2" class="card-radio-input">
                                                        <div class="card-radio text-truncate p-3">
                                                            <span class="fs-14 mb-4 d-block">Address 2</span>
                                                            <span class="fs-14 mb-2 d-block">Bradley McMillian</span>
                                                            <span class="text-muted fw-normal text-wrap mb-1 d-block">109 Clarksburg Park Road Show Low, AZ 85901</span>
                                                            <span class="text-muted fw-normal d-block">Mo. 012-345-6789</span>
                                                        </div>
                                                    </label>
                                                    <div class="edit-btn bg-light  rounded">
                                                        <a href="#" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit">
                                                            <i class="bx bx-pencil font-size-16"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="checkout-item">
                            <div class="avatar checkout-icon p-1">
                                <div class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bxs-wallet-alt text-white font-size-20"></i>
                                </div>
                            </div>
                            <div class="feed-item-list">
                                <div>
                                    <h5 class="font-size-16 mb-1">Payment Info</h5>
                                    <p class="text-muted text-truncate mb-4">Duis arcu tortor, suscipit eget</p>
                                </div>
                                <div>
                                    <h5 class="font-size-14 mb-3">Payment method :</h5>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6">
                                            <div data-bs-toggle="collapse">
                                                <label class="card-radio-label">
                                                    <input type="radio" name="pay-method" id="pay-methodoption1" class="card-radio-input">
                                                    <span class="card-radio py-3 text-center text-truncate">
                                                        <i class="bx bx-credit-card d-block h2 mb-3"></i>
                                                        Credit / Debit Card
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-3 col-sm-6">
                                            <div>
                                                <label class="card-radio-label">
                                                    <input type="radio" name="pay-method" id="pay-methodoption2" class="card-radio-input">
                                                    <span class="card-radio py-3 text-center text-truncate">
                                                        <i class="bx bxl-paypal d-block h2 mb-3"></i>
                                                        Paypal
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-sm-6">
                                            <div>
                                                <label class="card-radio-label">
                                                    <input type="radio" name="pay-method" id="pay-methodoption3" class="card-radio-input" checked="">

                                                    <span class="card-radio py-3 text-center text-truncate">
                                                        <i class="bx bx-money d-block h2 mb-3"></i>
                                                        <span>Cash on Delivery</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                    </ol>
                </div>
            </div>

            {{-- <div class="row my-4">
                <div class="col">
                    <a href="ecommerce-products.html" class="btn btn-link text-muted">
                        <i class="mdi mdi-arrow-left me-1"></i> Continue Shopping </a>
                </div> <!-- end col -->
                <div class="col">
                    <div class="text-end mt-2 mt-sm-0">
                        <a href="#" class="btn btn-success">
                            <i class="mdi mdi-cart-outline me-1"></i> Procced </a>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row--> --}}
        </div>
        <div class="col-xl-4 mod-4">
            <div class="card checkout-order-summary">
                <div class="card-body">
                    <div class="p-3 bg-light mb-3">
                        <h5 class="font-size-16 mb-0">Order Summary <span class="float-end ms-2"></span></h5>
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
                                @php
                                $total = 0;
                                @endphp
                                {{-- @if (session('ItemsCount') !== null)
                                    
                                    
                                @endif --}}
                                {{-- @foreach (session('ItemsCount') as $cartItem) --}}
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



                                {{-- <tr>
                                    <th scope="row"><img src="https://www.bootdey.com/image/280x280/FF00FF/000000" alt="product-img" title="product-img" class="avatar-lg rounded"></th>
                                    <td>
                                        <h5 class="font-size-16 text-truncate"><a href="#" class="text-dark">Waterproof Mobile Phone</a></h5>
                                        <p class="text-muted mb-0">
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star-half text-warning"></i>
                                        </p>
                                        <p class="text-muted mb-0 mt-1">$ 260 x 2</p>
                                    </td>
                                    <td>$ 520</td>
                                </tr>
                                <tr>
                                    <th scope="row"><img src="https://www.bootdey.com/image/280x280/FF00FF/000000" alt="product-img" title="product-img" class="avatar-lg rounded"></th>
                                    <td>
                                        <h5 class="font-size-16 text-truncate"><a href="#" class="text-dark">Smartphone Dual Camera</a></h5>
                                        <p class="text-muted mb-0">
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                        </p>
                                        <p class="text-muted mb-0 mt-1">$ 260 x 1</p>
                                    </td>
                                    <td>$ 260</td>
                                </tr> --}}
                                {{-- <tr>
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Sub Total :</h5>
                                    </td>
                                    <td>
                                        $ 780
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Discount :</h5>
                                    </td>
                                    <td>
                                        - $ 78
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Shipping Charge :</h5>
                                    </td>
                                    <td>
                                        $ 25
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Estimated Tax :</h5>
                                    </td>
                                    <td>
                                        $ 18.20
                                    </td>
                                </tr>                               --}}
                                    
                                <tr class="bg-light">
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Subtotal:</h5>
                                    </td>
                                    <td>
                                        {{$total}} DH
                                    </td>
                                </tr>
                                <tr class="bg-light">
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Livraison:</h5>
                                    </td>
                                    <td>
                                        15 DH
                                    </td>
                                </tr>
                                <tr class="bg-light">
                                    <td colspan="2">
                                        <h5 class="font-size-14 m-0">Total:</h5>
                                    </td>
                                    <td>
                                        {{$total + 15}} DH
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    
</div>

{{-- @php
    $n = 1;
@endphp
@foreach ($cartItems as $cartItem)
Article {{$n}}: <br>
{{$cartItem->name}} <br>
{{$cartItem->price}} DH x {{$cartItem->qty}} <br>
----------------------------------- <br>
@php
    $n++;
@endphp
@endforeach --}}

{{-- @php
    $n = 1;
@endphp
<textarea name="" id="" cols="30" rows="10" >
@foreach ($cartItems as $cartItem)
    Article {{$n}}: 
    {{$cartItem->name}} 
    {{$cartItem->price}} DH x {{$cartItem->qty}} 
----------------------------------- 
@php
    $n++;
@endphp
@endforeach
</textarea>
 --}}

 {{-- <script>
    $(window).load(function(){
        $('#exampleModalCenter').modal('show');
    });
    $('#form').on('submit', function(e){
    $('#exampleModalCenter').modal('show');
    e.preventDefault();
    });
    // $('#form').on('submit', function(e){
    // $('#exampleModalCenter').modal('show');
    // e.preventDefault();
    // });
</script> --}}

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('form');
        const modale = document.getElementById('exampleModalCenter');

        form.addEventListener('submit', function(event) {
            // event.preventDefault(); // Prevent form submission

            // Show the modal
            // modale.style.display = 'block';
            // $('#exampleModalCenter').modal('show');
            $(window).load(function(){
            $('#exampleModalCenter').modal('show');
            });
            

            // You can also add more code to customize modal behavior
        });
    });
</script> --}}

<script>
    // Function to show the modal
    // function showModal() {
    //     var modal = document.getElementById('exampleModalCenter');
    //     $('#exampleModalCenter').modal('show');
    // }

    // // Wait for the page to load
    // window.onload = function() {
    //     // Add event listener to the form submission
    //     var form = document.getElementById('form');
    //     form.addEventListener('submit', function(event) {
    //         // event.preventDefault(); // Prevent form submission

    //         // Here you can perform any necessary form processing

    //         // Show the modal
    //         showModal();
    //     });
    // };

//     function submitForm() { // submits form
//     document.getElementById("form").submit();
//     }

//     if (document.getElementById("form")) {
//     setTimeout("submitForm()", 50000000); // set timout 
// }

// success: function(data){
// window.location = window.location.href + "?openmodal=1";
// }


// $('#form').on('submit', function(e){
//     $('#exampleModalCenter').modal('show');
//     // e.preventDefault();
//     });
// $(window).load(function(){
//         $('#exampleModalCenter').modal('show');
//     });


// document.addEventListener('DOMContentLoaded', function() {
//         const form = document.getElementById('form');
//         const modale = document.getElementById('exampleModalCenter');

//         form.addEventListener('submit', function(event) {
//             event.preventDefault(); // Prevent form submission

//             // Show the modal
//             // modale.style.display = 'block';
//             $('#exampleModalCenter').modal('show');
//             // $(window).load(function(){
//             // $('#exampleModalCenter').modal('show');
//             // });
            

//             // You can also add more code to customize modal behavior
//         });
//     });

</script>


    {{-- @if(  $_GET['openmodal'] == 1){ 
        
        <script>
                 $(function(){
                     $('#exampleModalCenter').modal('show');
                 });
        </script>
    }
@endif --}}
 {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
  </button> --}}
  
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



{{-- <div class="modal fade show" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="padding-right: 17px; display: block;" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="card col-md-4 bg-white shadow-md p-5">
                <div class="mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
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
</div> --}}

  {{-- <div class="vh-100 d-flex justify-content-center align-items-center">
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

</div> --}}

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

{{-- <script type="text/javascript">
    $(document).ready(function(){
        $("#exampleModalCenter").modal("show");
    });
</script>
@php
         echo '<script type="text/javascript">
            $(document).ready(function(){
                $("#exampleModalCenter").modal("show");
            });
        </script>';
    @endphp --}}




{{-- {{$cartItems}}
{{count($cartItems)}} --}}
@endsection
