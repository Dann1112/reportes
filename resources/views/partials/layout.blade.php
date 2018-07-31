<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('partials.head')
        @yield('content')
    @include('partials.footer')
</html>