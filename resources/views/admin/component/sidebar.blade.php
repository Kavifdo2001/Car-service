<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">


        <div class="sidebar">

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                <div class="info">
                    <span class="logo-text">
                        {{-- <span class="logo-main">reelook<span class="me">.me</span></span><br>
                        <span class="slogan">where style meets expression</span> --}}
                    </span>
                </div>
            </div>


            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <li class="nav-item menu-open">
                        <a href="{{ route('admin.home') }}"
                            class="nav-link @if (request()->routeIs('admin.home')) active @endif ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard

                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link @if (request()->routeIs('admin.routes')) active @endif ">
                            <i class="nav-icon fas fa-route"></i>
                            <p>Spare Parts</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link @if (request()->routeIs('admin.inclusions')) active @endif ">
                            <i class="nav-icon fas fa-check-square"></i>
                            <p>Team</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link @if (request()->routeIs('admin.gallery')) active @endif ">
                            <i class="nav-icon far fa-images"></i>
                            <p>
                                Gallery
                            </p>
                        </a>
                        {{-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link @if (request()->routeIs('admin.photos'))active @endif ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Photos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link @if (request()->routeIs('admin.videos'))active @endif ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Videos</p>
                            </a>
                        </li>
                    </ul> --}}
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link @if (request()->routeIs('color.edit')) active @endif ">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Admin Setting
                            </p>
                        </a>
                    </li>

                    {{-- <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link @if (request()->routeIs('logout'))active @endif "
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </li> --}}
            </nav>
        </div>
    </aside>
</body>

</html>
