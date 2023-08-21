<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Asebbane Restaurant Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- End layout styles -->

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>


<style>
    table {
    border: 1px solid #ccc;
    border-collapse: collapse;
    margin: 0;
    padding: 0;
    width: 100%;
    table-layout: fixed;
    box-shadow: 1px 1px 20px 0px #999;
    
  }
  
  table caption {
    font-size: 1.5em;
    margin: .5em 0 .75em;
  }
  
  table tr{
    background-color: #ffffff;
    /* background-color: transparent; */
    border: 1px solid #ddd;
    padding: .35em;
    
  }
  tbody tr{
    /* height: 130px; */
    
  }
  
  table th ,
  table td{
    padding: .625em;
    text-align: center;
    /* white-space: wrap !important; */
  }
  
  table th{
    font-size: .85em;
    letter-spacing: .1em;
    text-transform: uppercase;
  }
  

  div.increment {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: center;
}


  /* @media screen and (max-width: 600px) { */
  @media screen and (max-width: 992px) {
    table{
      border: 0;
      
    }
  
    table caption {
      font-size: 1.3em;
    }
    
    table thead{
      border: none;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px;
    }
    
    table tr{
      border-bottom: 3px solid #ddd;
      display: block;
      margin-bottom: .625em;
    }
    
    table td{
      border-bottom: 1px solid #ddd;
      display: block;
      font-size: .8em;
      text-align: right;
      
    }
    
    table td::before {
      /*
      * aria-label has no advantage, it won't be read inside a table
      content: attr(aria-label);
      */
      content: attr(data-label);
      float: left;
      font-weight: bold;
      text-transform: uppercase;
    }
    
    table td:last-child {
      border-bottom: 0;
    }

    div.increment {
        justify-content: flex-end;
    }
    div.increment .number-input {
        margin-right: 20px;
    }
  }
  
  
  
  
table .btn{
    padding: 0.5rem;

}
  
  
  
@media (max-width: 1083px) {
    div.increment .number-input {
        margin-bottom: 5px;
    }
}
@media (min-width: 1083px) {
    div.increment .number-input {
        margin-right: 5px;
    }
}
  
body {
  background-color: #EDEDEC;
  background-image: radial-gradient(#000000 0.5px, #EDEDEC 0.5px);
  background-size: 10px 10px;
}
</style>





<body>
    <div class="container-scroller">
        @include('Admins.partiels.header')
        <!-- partial:partials/_sidebar.html -->
        @include('Admins.partiels.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" style="width: 100%;">
            <!-- partial:partials/_navbar.html -->
            {{-- @include('Admins.partiels.header') --}}
            {{-- <!-- partial --> --}}
            @yield('content')
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('Admins.partiels.footer')

</body>

</html>
