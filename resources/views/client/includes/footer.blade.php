<footer class="bg1">

    <style>
        .icons {
            display: flex;
            align-items: center;
            justify-content: center;
            /* margin-top: 20px; */
        }
        .icons img:not(:first-child){
            margin-left: 20px;
        }
        .icons img{
            filter: grayscale(100%);
        }
        .icons img:hover{
            filter: grayscale(0%);
        }

        .mini-footer {
            display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
        }

        .mini-footer a{
            color: #666666;
        }
        .mini-footer a:hover{
            color: #ec1d25;
        }
    </style>
    {{-- <div class="container p-t-40 p-b-70"> --}}
    <div class="container p-t-40 ">
        <div class="row">
            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-33">
                    Contactez-nous
                </h4>

                <ul class="">
                    <li class="txt14 m-b-14">
                        <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        <div>
                            En face hotel nagjir, Mahaj mohamed VI, Ave Essmara, Laayoune 70000
                        </div>
                        
                    </li>

                    <li class="txt14 m-b-14">
                        <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        <div>
                            080-8616369
                        </div>
                        
                    </li>

                    <li class="txt14 m-b-14">
                        <i class="fa fa-envelope fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        <div>
                            <a href="" style="color: #999999;">Contact@mercilaayoune.com</a>
                        </div>
                        
                    </li>

                    <li class="txt14 m-b-14">
                        <i class="fab fa-facebook-f fs-16"></i>
                        <div>
                            <a href="https://www.facebook.com/mercilaayoune" style="color: #999999;">mercilaayoune</a>
                        </div>
                        
                    </li>

                    <li class="txt14 m-b-14">
                        <i class="fab fa-instagram fs-16"></i>
                        <div>
                            <a href="https://www.instagram.com/mercilaayoune1" style="color: #999999;">mercilaayoune1</a>
                        </div>
                        
                    </li>

                    <li class="txt14 m-b-14">
                        <i class="fab fa-tiktok fs-16"></i>
                        <div>
                            <a href="https://www.tiktok.com/@mercilaayoune" style="color: #999999;">@mercilaayoune</a>
                        </div>
                        
                        
                        
                    </li>
                </ul>

                <!-- - -->
                {{-- <h4 class="txt13 m-b-32">
                    Opening Times
                </h4>

                <ul>
                    <li class="txt14">
                        <a>
                            MONDAY-THURSDAY
                        </a>

                        <span style="color:brown">
                            10:00-22:00
                        </span>
                    </li>




                    <li class="txt14">
                        <a>
                            FRIDAY
                        </a>

                        <span style="color:brown">
                            (CLOSE)
                        </span>
                    </li>


                    <li class="txt14">
                        <a>
                            SATURDAY
                        </a>

                        <span style="color:brown">
                            10:00-02:00
                        </span>
                    </li>

                    <li class="txt14">
                        <a>
                            SANDAY
                        </a>

                        <span style="color:brown">
                            10:00-02:00
                        </span>
                    </li>
                </ul> --}}
                {{-- <div class="icons">
                    <img src="clientpage/images/payment/logo_cmi.png" width="40px" alt="">
                    <img src="clientpage/images/payment/visa.png" alt="" width="60px">
                    <img src="clientpage/images/payment/mastercard.png" alt="" width="50px">
                    <img src="clientpage/images/payment/paypal.png" alt="" width="80px">
                </div> --}}
            </div>

            {{-- <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-33">
                    Latest twitter
                </h4>

                <div class="m-b-25">
                    <span class="fs-13 color2 m-r-5">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </span>
                    <a href="#" class="txt15">
                        @AsebbaneRestaurant
                    </a>

                    <p class="txt14 m-b-18">
                        Asebbane Restaurant is the best option, if you want delicious healthy meals with high quality.
                        <a href="#" class="txt15">
                            https://AsebbaneRestaurant.com
                        </a>
                    </p>

                    <span class="txt16">
                        21 Dec 2017
                    </span>
                </div>


            </div> --}}

            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-38">
                    Galerie
                </h4>

                <!-- Gallery footer -->
                <div class="wrap-gallery-footer flex-w">
                    <a class="item-gallery-footer wrap-pic-w" href={{ asset('clientpage/images/photo-gallery-01.jpg') }}
                        data-lightbox="gallery-footer">
                        <img src={{ asset('clientpage/images/photo-gallery-thumb-01.jpg') }} alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href={{ asset('clientpage/images/photo-gallery-02.jpg') }}
                        data-lightbox="gallery-footer">
                        <img src={{ asset('clientpage/images/photo-gallery-thumb-02.jpg') }} alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href={{ asset('clientpage/images/photo-gallery-03.jpg') }}
                        data-lightbox="gallery-footer">
                        <img src={{ asset('clientpage/images/photo-gallery-thumb-03.jpg') }} alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href={{ asset('clientpage/images/photo-gallery-04.jpg') }}
                        data-lightbox="gallery-footer">
                        <img src={{ asset('clientpage/images/photo-gallery-thumb-04.jpg') }} alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href={{ asset('clientpage/images/photo-gallery-05.jpg') }}
                        data-lightbox="gallery-footer">
                        <img src={{ asset('clientpage/images/photo-gallery-thumb-05.jpg') }} alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w"
                        href={{ asset('clientpage/images/photo-gallery-06.jpg') }} data-lightbox="gallery-footer">
                        <img src={{ asset('clientpage/images/photo-gallery-thumb-06.jpg') }} alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w"
                        href={{ asset('clientpage/images/photo-gallery-07.jpg') }} data-lightbox="gallery-footer">
                        <img src={{ asset('clientpage/images/photo-gallery-thumb-07.jpg') }} alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w"
                        href={{ asset('clientpage/images/photo-gallery-08.jpg') }} data-lightbox="gallery-footer">
                        <img src={{ asset('clientpage/images/photo-gallery-thumb-08.jpg') }} alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w"
                        href={{ asset('clientpage/images/photo-gallery-09.jpg') }} data-lightbox="gallery-footer">
                        <img src={{ asset('clientpage/images/photo-gallery-thumb-09.jpg') }} alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w"
                        href={{ asset('clientpage/images/photo-gallery-10.jpg') }} data-lightbox="gallery-footer">
                        <img src={{ asset('clientpage/images/photo-gallery-thumb-10.jpg') }} alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w"
                        href={{ asset('clientpage/images/photo-gallery-11.jpg') }} data-lightbox="gallery-footer">
                        <img src={{ asset('clientpage/images/photo-gallery-thumb-11.jpg') }} alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w"
                        href={{ asset('clientpage/images/photo-gallery-12.jpg') }} data-lightbox="gallery-footer">
                        <img src={{ asset('clientpage/images/photo-gallery-thumb-12.jpg') }} alt="GALLERY">
                    </a>
                </div>

            </div>
            <div class="col-sm-6 col-md-4 p-t-50">

                <h4 class="txt13 m-b-33">
                    Location
                </h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3550.179599254894!2d-13.199997324552296!3d27.15063887650619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc3773a103f1c107%3A0xa1eb7796bf4aba3!2sMerci%20Laayoune!5e0!3m2!1sfr!2s!4v1691700536776!5m2!1sfr!2s" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>


        <div class="icons">
            <img src="clientpage/images/payment/logo_cmi.png" width="40px" alt="">
            <img src="clientpage/images/payment/visa.png" alt="" width="60px">
            <img src="clientpage/images/payment/mastercard.png" alt="" width="50px">
            <img src="clientpage/images/payment/paypal.png" alt="" width="80px">
        </div>


<span style="display:block;
            width:100%; 
            border-top: 1px solid #666666"></span>
        <div class="mini-footer mt-3">
            
            <p>
                © 2023 <a href="{{ route('clientIndex.index')}}">Merci Laayoune</a>. Tous les droits sont réservés
            </p>
            <p>
                    <a href="{{ route('politique')}}">politique de confidentialité</a> | <a href="">conditions d'utilisation</a> 

            </p>
        </div>





    </div>

    {{-- <div class="end-footer bg2">
        <div class="container">
            <div class="flex-sb-m flex-w p-t-22 p-b-22">
                <div class="p-t-5 p-b-5">
                    <a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                    <a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
                    <a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
                </div>

                <div class="txt17 p-r-20 p-t-5 p-b-5">
                    Copyright &copy; 2018 All rights reserved | This template is made with <i class="fa fa-heart"></i>
                    by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="col-sm-6 col-md-4 p-t-50">
        <div>
            <img src="clientpage/images/payment/logo_cmi.png" width="50px" alt="">
            <img src="clientpage/images/payment/visa.png" alt="" width="80px">
            <img src="clientpage/images/payment/mastercard.png" alt="" width="70px">
            <img src="clientpage/images/payment/paypal.png" alt="" width="100px">
        </div>
    </div> --}}

    
</footer>
