<div class="navbar navbar-expand-lg">
    <!-- brand -->
    <a href="home" class="navbar-brand text-white ">
        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1" fill="#000"></circle>
            <circle cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1"></circle>
            <g class="loading-spin" stroke="currentColor" stroke-width="1" style="transform-origin: 12px 12px">
                <path d="M16.24 7.76a6 6 0 0 1 0 8.49m-8.48-.01a6 6 0 0 1 0-8.49m11.31-2.82a10 10 0 0 1 0 14.14m-14.14 0a10 10 0 0 1 0-14.14"></path>
            </g>
        </svg>
        <!-- <img src="../assets/img/logo.png" alt="..."> -->
        <span class="hidden-folded d-inline l-s-n-1x ">Released</span>
    </a>
    <!-- / brand -->
    <!-- Navbar collapse -->
    <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarCollapse">
        <ul class="navbar-nav" data-nav>
            <li class="nav-item">
                <a href="discover" class="nav-link">
                    <span class="nav-text">Discover</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../html/charts.html" class="nav-link">
                    <span class="nav-text">Charts</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../html/genres.html" class="nav-link">
                    <span class="nav-text">Genres</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="artist" class="nav-link">
                    <span class="nav-text">Artists</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../html/blog.html" class="nav-link">
                    <span class="nav-text">Blog</span>
                </a>
            </li>
        </ul>
        <form class="input-group m-2 my-lg-0 ">
                        <span class="input-group-prepend">
          <button type="button" class="btn no-shadow no-bg px-0"><i data-feather="search"></i></button>
        </span>
            <input type="text" class="form-control no-border no-shadow no-bg typeahead" placeholder="Search..." data-plugin="typeahead">
        </form>
    </div>
    <ul class="nav navbar-menu order-1 order-lg-2">
        <li class="nav-item d-none d-sm-block">
            <a class="nav-link px-2" data-toggle="fullscreen" data-plugin="fullscreen">
                <i data-feather="maximize"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link px-2">
                <i data-feather="upload" class="d-lg-none"></i><span class="btn btn-rounded btn-sm gd-primary text-white d-none d-lg-block">Upload</span>
            </a>
        </li>
        <!-- User dropdown menu -->
        <li class="nav-item dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link d-flex align-items-center py-0 px-lg-0 px-2 text-color">
                <span class="avatar w-24"><img src="../assets/img/a1.jpg" alt="..."></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right mt-3 animate fadeIn">
                <a class="dropdown-item" href="../html/artist.detail.html">
                    <span>Profile</span>
                </a>
                <a class="dropdown-item" href="../html/artist.detail.html#tracks">
                    <span>Tracks</span>
                </a>
                <a class="dropdown-item" href="../html/artist.detail.html#albums">
                    <span>Albums</span>
                </a>
                <a class="dropdown-item" href="../html/artist.detail.html#liked">
                    <span>Likes</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../html/signin.html">Sign out</a>
            </div>
        </li>
        <!-- Navarbar toggle btn -->
        <li class="nav-item d-lg-none">
            <a href="#" class="nav-link px-2" data-toggle="collapse" data-toggle-class data-target="#navbarCollapse">
                <i data-feather="menu"></i>
            </a>
        </li>
    </ul>
</div>