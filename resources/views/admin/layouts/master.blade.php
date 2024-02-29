@include('admin.layouts.header')


<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        <!-- Main Content:END -->

        @include('admin.layouts.copyright')
    </div>
</div>


@include('admin.layouts.footer')
