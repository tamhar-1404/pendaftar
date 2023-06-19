<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('Siswa_admin.css')
</head>

<body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased" :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme, $store.app.menu, $store.app.layout, $store.app
        .rtlClass
    ]">
    {{-- asset --}}
    @include('Siswa_admin.asset')
    {{-- end --}}
    <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
        {{--
        <!-- start sidebar section --> --}}
        @include('dudi.sidebar')
        {{--
        <!-- end sidebar section --> --}}

        <div class="main-content">
            {{--
            <!-- start header section --> --}}
            @include('dudi.header')
            {{--
            <!-- end header section --> --}}

            <div class="animate__animated p-6" :class="[$store.app.animation]">
                {{--
                <!-- start main content section --> --}}
                @include('Siswa_admin.card')
                {{--
                <!-- end main content section --> --}}


            </div>
        </div>
    </div>

    <script src="assets/js/alpine-collaspe.min.js"></script>
    <script src="assets/js/alpine-persist.min.js"></script>
    <script defer src="assets/js/alpine-ui.min.js"></script>
    <script defer src="assets/js/alpine-focus.min.js"></script>
    <script defer src="assets/js/alpine.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
