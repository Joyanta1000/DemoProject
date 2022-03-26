<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.layouts.includes.head')
</head>

<body class="page-body  page-fade" data-url="http://neon.dev">

    <div class="page-container">
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

        <div class="sidebar-menu">

            @include('dashboard.layouts.includes.sidebar_menu')

        </div>

        <div class="main-content">

            <div class="row">

                @include('dashboard.layouts.includes.navbar')

            </div>

            <hr />

            @yield('content')

            <!-- Footer -->
            @include('dashboard.layouts.includes.footer')

        </div>


        {{-- Chat --}}
        @include('dashboard.layouts.includes.chat')


    </div>

    {{-- Modal --}}

    @include('dashboard.layouts.includes.modal')


    {{-- script --}}

    @include('dashboard.layouts.includes.script')

</body>

</html>
