<!-- HEADER -->
<div class="header header-1">
    <!-- MIDDLE BAR -->
    <div class="middlebar d-none d-sm-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3 col-md-3">
                    <div class="logo">
                        <a href="/"> <img style="width: 80px; height: 80px; object-fit:cover" src="{{asset('images/logo.png')}}" alt="" />
                        </a>
                       
                    </div>
                </div>
                <div class="col-9 col-md-9">
                    <div class="contact-info">
                        <!-- INFO 1 -->
                        <div class="rs-icon-1">
                            <div class="icon">
                                <div class="fas fa-envelope"></div>
                            </div>
                            <div class="body-content">
                                <div class="heading">Email Support :</div>
                                jozidacl@gmail.com
                            </div>
                        </div>
                        <!-- INFO 1 -->
                        <div class="rs-icon-1">
                            <div class="icon">
                                <div class="fas fa-phone-volume"></div>
                            </div>
                            <div class="body-content">
                                <div class="heading">Call Support :</div>
                                (+233) 244-725-281
                            </div>
                        </div>

                        
                        <!-- INFO 2 -->
                        <div class="rs-icon-1">
                            <div class="icon">
                                <div class="fas fa-clock"></div>
                            </div>
                            <div class="body-content">
                                <div class="heading">Work Hour :</div>
                                Mon - Fri 7:00 AM – 4:00 PM
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR SECTION -->
    <div class="navbar-main">
        <div class="container">
            <nav id="navbar-example" class="navbar navbar-expand-lg navbar-bg">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link {{--dropdown-toggle --}}" href="{{ url('/')}}">
                              Home
                            </a>
                            {{-- <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.html">Homepage 1</a>
                                  <a class="dropdown-item" href="index-2.html">Homepage 2</a>
                                  <a class="dropdown-item" href="index-3.html">Homepage 3</a>
                            </div> --}}
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about')}}">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/services')}}">Services</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link {{--dropdown-toggle --}}" href="{{ url('/projects')}}" >
                              Projects  
                            </a>
                            {{-- <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ url('/projects')}}">Projects Grid</a>
                                <a class="dropdown-item" href="projects-single.html">Projects Single</a>
                            </div> --}}
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link {{-- dropdown-toggle --}}" href="{{ url('/news')}}" >
                              News  
                            </a>
                            {{-- <div class="dropdown-menu">
                                <a class="dropdown-item" href="news.html">News Grid</a>
                                <a class="dropdown-item" href="news-single.html">Single News</a>
                            </div> --}}
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact')}}">Contact</a>
                        </li>

                    </ul>
                </div>
                <a href="/contact" class="btn btn-primary btn-navbar d-none d-sm-block cs-header-quote">Get a Quote</a>
            </nav> <!-- Navbar -->
            
        </div>
    </div>

</div>