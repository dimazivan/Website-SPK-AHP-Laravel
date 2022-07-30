<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="/home">SI Perum</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="/home"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="/home">Home</a></li>
                <li><a href="/home#about">About</a></li>
                <li><a href="/home#services">Services</a></li>
                <li><a href="/home#portfolio">Alternative</a></li>
                <li><a href="/home#team">Team</a></li>
                <li><a href="/home#cta">Ahp</a></li>
                <li><a href="/home#contact">Contact</a></li>
                <li class="drop-down"><a href="">Hi, {{ auth()->user()->name }}</a>
                    <ul>
                        <li class="drop-down"><a href="#">Edit Profil</a>
                            <ul>
                                <li><a href="#">Edit Your Name</a></li>
                                <li><a href="/profil/reset" data-toggle="modal" data-target="#ModalPassword">Edit Your Password</a></li>
                            </ul>
                        </li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->