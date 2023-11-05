<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" {{route('dashboard')}}" target="_blank">
            <img src="{{asset('assets/img/logo-ct-dark.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">AnsarDaad</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link  {{ request()->routeIs('dashboard') ? 'active' :'bg-success'}}" href="{{route('dashboard')}}">

                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('daad.country') ? 'active' :'bg-success'}} " href="{{route('daad.country')}}">

                <span class="nav-link-text ms-1">Daad Countries</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('daad.package') ? 'active' :'bg-success'}} " href="{{route('daad.package')}}">

                <span class="nav-link-text ms-1">Daad Package</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ request()->routeIs('daad.commission') ? 'active' :'bg-success'}}" href="{{route('daad.commission')}}">

                <span class="nav-link-text ms-1">Daad Commission</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ request()->routeIs('daad.fixing') ? 'active' :'bg-success'}} " href="{{route('daad.fixing')}}">

                <span class="nav-link-text ms-1">Daad Fixing Adjustment</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link  {{ request()->routeIs('daad.size') ? 'active' :'bg-success'}}" href="{{route('daad.size')}}">

                <span class="nav-link-text ms-1">Daad Size</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ request()->routeIs('daad.weight') ? 'active' :'bg-success'}}" href="{{route('daad.weight')}}">

                <span class="nav-link-text ms-1">Daad Weight</span>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link {{ request()->routeIs('profile.show') ? 'active' :'bg-success'}}" href="{{ route('profile.show') }}">
                {{ __('Profile') }}
            </a>
        </li>
        <li class="nav-item">


            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link {{ request()->routeIs('logout') ? 'active' :'bg-danger'}}" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                {{ __('Log Out') }}
            </a>
            <form id="logout-form" method="POST" action="{{ route('logout') }}" x-data>
                @csrf
            </form>
        </li>
    </ul>


</aside>
