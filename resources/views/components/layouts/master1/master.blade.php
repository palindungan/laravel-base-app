<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.layouts.master1.head.main')
</head>

<body>
    <div class="wrapper sidebar_minimize">
        @include('components.layouts.master1.sidebar.main')

        <div class="main-panel">
            @include('components.layouts.master1.header.main')

            <div class="container">
                <div class="page-inner">
                    @yield('content')
                </div>
            </div>

            @include('components.layouts.master1.footer.main')
        </div>
    </div>

    @include('components.layouts.master1.script.main')
</body>

</html>
