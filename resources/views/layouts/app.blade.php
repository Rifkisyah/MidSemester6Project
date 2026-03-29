<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="bg-gray-100 font-family-karla">

    <div class="flex min-h-screen">

        {{-- SIDEBAR --}}
        @include('layouts.parts.side-bar')

        {{-- CONTENT AREA --}}
        <div class="flex-1 flex flex-col">

            {{-- HEADER --}}
            @include('layouts.parts.header')

            {{-- MAIN CONTENT --}}
            <main class="flex-1 p-6">
                @yield('content')
            </main>

            {{-- FOOTER --}}
            @include('layouts.parts.footer')

        </div>

    </div>

</body>
@stack('scripts')
</html>
