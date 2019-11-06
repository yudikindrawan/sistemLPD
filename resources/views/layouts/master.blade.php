<!doctype html>
<html lang="en">

@include('layouts.head')
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('layouts.header')
        @include('layouts.setting')
        @if (Auth::user()->roles_id != 3)
            @include('layouts.sidebar')
        @endif
        @yield('content')
        @include('layouts.footer')
        @include('layouts.scripts')

</body>
@jquery
@toastr_js
@toastr_render
</html>
