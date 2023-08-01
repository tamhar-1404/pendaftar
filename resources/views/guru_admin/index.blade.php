
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Penanggung Jawab</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        theme: {
            extend: {
                blur: {
                    xs: '3px',
                  }
            },
          },

    </script>
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
    rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <link rel="stylesheet" href="load/load.css">
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
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
      <script>
          theme: {
              extend: {
                  blur: {
                      xs: '3px',
                    }
              },
            },

      </script>
</head>
<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error("Cok");
            </script>
        @endforeach
    @endif
    @if (session()->has('success'))
        <script>
            Swal.fire(
                'Berhasil!',
                "{{ session('success') }}",
                'success'
            )
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            Swal.fire(
                'Oops..!',
                "{{ session('error') }}",
                'error'
            )
        </script>
    @endif
     <!-- screen loader -->
     <div  class="spin_load  screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <div class="center">
            <div class="ring">
            </div>
            <img src="{{ asset('load/logo.png') }}" alt="Deskripsi gambar" class="my-img">
        </div>
    </div>

    @include('jurnal_admin.layout')

    <div class=" pl-[px] " id="content">


    @include('jurnal_admin.nav')

@include('guru_admin.asset')
</div>



    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script>
      $(window).on('load', function() {
          $('.spin_load').fadeOut();
      });
  </script>
    <script>
       const instanceMode = te.Sidenav.getInstance(
        document.getElementById("sidenav-2")
        );
        const modes = ["side"];

        modes.forEach((mode) => {
        const modeSwitch = document.getElementById(mode);
        modeSwitch.addEventListener("click", () => {
            const instance = te.Sidenav.getInstance(
            document.getElementById("sidenav-2")
            );
            instance.changeMode(mode);
            modes.forEach((el) => {
            if (el === mode) {
                ["text-primary-600", "border-primary-600"].forEach((item) =>
                modeSwitch.classList.remove(item)
                );
                modeSwitch.className +=
                " bg-primary text-white hover:bg-primary-700 active:bg-primary-800 focus:bg-primary-700 border-transparent";
            } else {
                const node = document.getElementById(el);
                node.className += " text-primary-600 border-primary-600";
                [

                ].forEach((item) => node.classList.remove(item));
            }
            });
        });
        });
    </script>
    <script>
                // Initialization for ES Users
        import {
        sidenav-2,
        initTE,
        } from "tw-elements";

        initTE({ sidenav-2 });
    </script>
</body>

</html>
