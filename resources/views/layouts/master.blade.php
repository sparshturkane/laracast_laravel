<!DOCTYPE html>
<html lang="en">

{{-- head --}}
@include('layouts/head')
<body>

    <div class="container-fluid">
        <div class="row content">
            {{-- sidenav --}}
            @include('layouts/sidenav')
            <div class="col-sm-9">
                {{-- yield posts --}}
                @yield('contents')
            </div>
        </div>
    </div>

    {{-- footer --}}
    @include('layouts/footer')
</body>

</html>
