<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/admin/assets/images/Logo.png" rel="shortcut icon">
    <script>
        theme: {
            extend: {
                blur: {
                    xs: '3px',
                }
            },
        },
    </script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <link rel="stylesheet" href="load/load.css">
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>
</head>

<body>
    <!-- screen loader -->
    <div
        class="spin_load  screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <div class="center">
            <div class="ring">
            </div>
            <img src="load/logo.png" alt="Deskripsi gambar" class="my-img">
        </div>
    </div>
    @include('jurnal_admin.layout')

    <div class=" pl-[px] " id="content">


        @include('jurnal_admin.nav')

        @include('dudi.sidebar')


    </div>



    <script>
        $(window).on('load', function() {
            $('.spin_load').fadeOut();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sidenavToggleButton = document.getElementById("sidenavToggleButton");
            const sidenavInstance = te.Sidenav.getInstance(document.getElementById("sidenav-2"));

            sidenavToggleButton.addEventListener("click", () => {
                sidenavInstance.toggle(); // Toggle the sidenav
            });

            // Automatically close sidenav in mobile view
            const mediaQuery = window.matchMedia("(max-width: 768px)"); // Adjust the breakpoint as needed

            const closeSidenavInMobile = (mediaQuery) => {
                if (mediaQuery.matches && sidenavInstance.isOpen()) {
                    sidenavInstance.close();
                }
            };

            closeSidenavInMobile(mediaQuery); // Close initially if in mobile view
            mediaQuery.addListener(closeSidenavInMobile); // Close on window resize to mobile view

            // Apply similar behavior to sub-menus
            const menuItem1 = document.getElementById("hari_ini");
            const submenu1 = document.querySelector("[data-te-sidenav-collapse-ref]");

            menuItem1.addEventListener("click", function() {
                submenu1.classList.toggle("hidden");
                submenu1.classList.toggle("block");
            });

            const menuItem2 = document.getElementById("hari_ini1");
            const submenu2 = document.querySelector("[data-te-sidenav-collapse-reff]");

            menuItem2.addEventListener("click", function() {
                submenu2.classList.toggle("hidden");
                submenu2.classList.toggle("block");
            });
        });
    </script>
    <script>
        // Initialization for ES Users
        import {
            sidenav - 2,
            initTE
        } from "tw-elements";

        initTE({
            sidenav - 2
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


</body>

</html>
