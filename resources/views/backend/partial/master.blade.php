<!DOCTYPE html>
<html lang="en">
    @include('backend.partial.head')
    <body>
        <div class="adminx-container">
            @include('backend.partial.navbar')
            @include('backend.partial.sidebar')

            <div class="adminx-content">
                <div class="adminx-main-content">
                    @yield('content')
                </div>
            </div>
        </div>
    @include('backend.partial.script')
    @yield('script')
</body>
</html>

