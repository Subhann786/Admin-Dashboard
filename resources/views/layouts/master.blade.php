<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


<!DOCTYPE html>
<html lang="en">



<head>

    @include('partials.head')

 

</head>



<body class="g-sidenav-show  bg-gray-100">



    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">

        @include('partials.sidebar')
        

    </aside>

    <main class="main-content border-radius-lg ">
        <!-- Navbar -->

        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            @include('partials.navbar')
        </nav>

        <!-- End Navbar -->

        <div>



        @yield('page');


</div>

            

        <div class="container-fluid py-4">



            @include('partials.footer')

        </div>


    </main>



    <div class="fixed-plugin">
        @include('partials.pluginsetting')
    </div>

        @include('partials.script')
</body>

</html>