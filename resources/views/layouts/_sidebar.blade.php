<!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
<i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
        <ul>
            <li @if(Request::segment(1) == '') active @endif" >
                <a href="{{'home'}}" class="nav-link scrollto active">
                    <i class="bx bx-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li @if(Request::segment(1) == '') active @endif">
                <a href="{{'about'}}" class="nav-link scrollto">
                    <i class="bx bx-user"></i>
                    <span>About</span>
                </a>
            </li>
            <li @if(Request::segment(1) == '') active @endif">
                <a href="{{'resume'}}" class="nav-link scrollto">
                    <i class="bx bx-file-blank"></i>
                    <span>Resume</span>
                </a>
            </li>
            <li @if(Request::segment(1) == '') active @endif">
                <a href="{{ 'portfolio' }}" class="nav-link scrollto">
                    <i class="bx bx-book-content"></i>
                    <span>Portfolio</span>
                </a>
            </li>
            <li @if(Request::segment(1) == '') active @endif">
                <a href="{{'services'}}" class="nav-link scrollto">
                    <i class="bx bx-server"></i>
                    <span>Services</span>
                </a>
            </li>
            <li @if(Request::segment(1) == '') active @endif">
                <a href="{{'contact'}}" class="nav-link scrollto">
                    <i class="bx bx-envelope"></i>
                    <span>Contact</span>
                </a>
            </li>
        </ul>
    </nav><!-- .nav-menu -->

</header><!-- End Header -->
