<aside id="sidebar-wrapper">
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/home') }}" class="small-sidebar-text">
            <img class="navbar-brand-full" src="{{ asset('img/images.png') }}" width="45px" alt=""/>
        </a>
    </div>
    <ul class="sidebar-menu ">
        @include('layouts.menu')
    </ul>
</aside>