<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')

    <title>@yield('title') | Landing Page</title>

    @stack('before-style')
    <!-- style -->
    @include('includes.style')

    @stack('after-style')
</head>
<body>

    @include('includes.header')
        @yield('content')

    @stack('before-script')
    <!-- script -->
    @include('includes.script')

    @stack('after-script')
    
</body>
</html>