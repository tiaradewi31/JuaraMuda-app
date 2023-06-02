<header class="navbar fixed-top navbar-expand-lg navbar-dark bd-navbar" style= "background-color :#213346">
    <nav class="container bd-gutter flex-wrap flex-lg-nowrap" aria-label="Main navigation">
        <a class="navbar-brand" href="\homepage">
            <img src="img/Logonavbar.png"  alt="" width="35%;">
        </a>    
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        
           <div class="navMenu text-end">
                <ul class="navbar-nav">
                    @auth
                    <li class="nav-item">
                        <h4><a class="nav-link" style= "color : black; padding-top: 10px; color:#F6E7C0;" href="\profil"><b>Welcome Back, {{ auth()->user()->uname }} </b></a></h4>
                    </li>
                    @endauth
                </ul>
            </div>
        
    </nav>
</header>