<style>
    span.barre{
    display:block;
    width:100%; /*or whatever width you want the effect of <hr>*/
    border-top: 1px solid #ccc
    }
    /* The sidebar menu */
.sidebar {
  min-height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 4; /* Stay on top */
  top: 0;
  left: 0;
  background-color: #1c2131; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
}

/* The sidebar links */
.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidebar a:hover {
  color: #ec1d25;
}

/* Position and style the close button (top right corner) */
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* The button used to open the sidebar */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

/* .openbtn:hover {
  background-color: #444;
} */

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s; /* If you want a transition effect */
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

.sidebar .nav .nav-item .nav-link {
    color: #d0d7ff;
}
</style>

<script>
    /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
    function openNav() {
    document.getElementById("sidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    }

    /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
    document.getElementById("sidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    }
</script>

{{-- <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center btn-show-sidebar" type="button"
        data-toggle="offcanvas" onclick="openNav()">
        <span class="mdi mdi-format-line-spacing"></span>
</button> --}}


<base href="/public">

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color: #d0d7ff">&times;</a>
    {{-- <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="clientIndex" style="color: white">Acceuil </a>

    </div> --}}
    <div style="    display: flex;
    flex-direction: column;
    align-items: center;">
    <img src="clientpage/images/MERCI_IMG/Logo-Merci.png" alt="" width="200px">
    </div>
    
    <ul class="nav">
        {{-- <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{ $profile->image }}" alt="{{ $profile->image }}">
                        <img class="img-xs rounded-circle " src="./img.png" alt="{{ $profile->image }}">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ $profile->user->name }}</h5>
                        <span>Admin Member</span>
                    </div>
                </div>

            </div>
        </li> --}}
        {{-- <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">

                        <span>Admin Member</span>
                    </div>
                </div>

            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li> --}}

        {{-- <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="user" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path
                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                    </svg>
                    <i class="bi bi-people-fill"></i>
                </span>
                <span class="menu-title">users</span>
                <i class="menu-arrow"></i>
            </a>

        </li> --}}
        <li class="nav-item menu-items">
            <a class="nav-link" href="repas">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Menu</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="contact">
                <span class="menu-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-rolodex" viewBox="0 0 16 16">
                        <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                        <path
                            d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z" />
                    </svg>
                    <i class="bi bi-person-rolodex"></i>
                </span>
                <span class="menu-title">contacts</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="chef">
                <span class="menu-icon">

                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">chefs</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="commande">
                <span class="menu-icon">

                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">commandes</span>
            </a>
        </li>
        {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="blog">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">blogs</span>
            </a>
        </li> --}}
        <li class="nav-item menu-items">
            <a class="nav-link" href="reservation">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Reservation</span>
            </a>
        </li>
        {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="category">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Categories</span>
            </a>
        </li> --}}
        <li class="nav-item menu-items">
            <a class="nav-link" href="photos">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Galery</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="reviews">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Reviwes</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('coupon.index') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Coupons</span>
            </a>
        </li>
        
        <li class="nav-item menu-items" style="margin-top: 50px;">
            <span class="barre"></span>
            <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        
                    

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            
                <span class="menu-icon">
                    <i class="fas fa-power-off" style="color: #fc424a;"></i>
                </span>
                <span class="menu-title">{{ __('Logout') }}</span>
            </a>
        </li>
    </ul>
</nav>


