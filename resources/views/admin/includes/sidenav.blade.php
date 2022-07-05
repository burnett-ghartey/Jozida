<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{ url('/admin')}}" aria-expanded="false" aria-controls=""><i
                                class="fa fa-fw fa-rocket"></i>Dashboard <span class="badge badge-success">6</span></a>
                    </li>
                   
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/categories')}}" aria-expanded="false"
                            aria-controls="submenu-3"><i class="fas fa-fw fa-table"></i>Categories</a>
                    </li> --}}
                    {{-- @if(Auth::user()->isAdmin()) --}}

                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-4" aria-controls="submenu-4"><i
                                class="fa fa-fw fa-user-circle"></i>Users</a>
                        <div id="submenu-4" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/users')}}">All users</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/users/create')}}">New user</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    

                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-newspaper"></i>Articles</a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/articles')}}">All articles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/articles/create')}}">New article</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-6" aria-controls="submenu-6"><i class="fa fa-wrench" aria-hidden="true"></i>Services</a>
                        <div id="submenu-6" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/services')}}">All services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/services/create')}}">New service</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-7" aria-controls="submenu-7"><i class="fa fa-cogs" aria-hidden="true"></i>Projects</a>
                        <div id="submenu-7" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/projects')}}">All projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/projects/create')}}">New project</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    {{-- @endif --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('reviews.index')}}" aria-expanded="false"
                            aria-controls="submenu-3"><i class="fas fa-fw fa-comments"></i>Reviews</a>
                    </li> --}}


                </ul>
            </div>
        </nav>
    </div>
</div>
