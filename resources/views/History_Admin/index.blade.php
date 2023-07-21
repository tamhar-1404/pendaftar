<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Approval Izin</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
    <script src="https://cdn.tailwindcss.com%22%3E/""></script>
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
     <!-- screen loader -->
     <div  class="spin_load  screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <div class="center">
            <div class="ring">
            </div>
            <img src="load/logo.png" alt="Deskripsi gambar" class="my-img">
        </div>
    </div>
    @include('jurnal_admin.layout')
    <div class=" pl-[px] " id="content">
      @include('jurnal_admin.nav')

          <script>
            const addButton = document.querySelector("#addButton");
            const registerModal = document.querySelector("#registerModal");
            const cancelButton = document.querySelector(".ml-auto button");

            addButton.addEventListener("click", () => {
              registerModal.classList.remove("hidden");
            });

            cancelButton.addEventListener("click", () => {
              registerModal.classList.add("hidden");
            });
          </script>
          <h3 class="text-center mt-7 mb-2">History TopUp</h3>
          <hr>
          <div class="flex flex-col px-4 mt-2">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm ">
                            <thead class="border-rounded bg-[#E2E8F0] dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="px-6 py-2">#</th>
                                    <th scope="col" class="px-6 py-2">Nama</th>
                                    <th scope="col" class="px-6 py-2">Email</th>
                                    <th scope="col" class="px-6 py-2">Rfid</th>
                                    <th scope="col" class="px-6 py-2">Sekolah</th>
                                    <th scope="col" class="px-6 py-2">Saldo</th>
                                    <th scope="col" class="px-6 py-2">Tanggal</th>
                                    <th scope="col" class="px-6 py-2">Status</th>

                                </tr>
                            </thead>
                                @php
                                 $no = 1;
                            @endphp
                        <tbody>
                            @forelse ($TopUp as $topup)
                            <form action="{{ route('TopUp.update', $topup->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <tr>
                                    <td class="whitespace-nowrap px-6 py-2">
                                        {{ $no++ }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-2">
                                        {{ $topup->user->name }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-2">
                                        {{ $topup->user->email }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-2">
                                        {{ $topup->user->RFID }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-2">
                                        {{ $topup->user->sekolah }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-2">
                                        {{ $topup->saldo }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-2">
                                        {{ $topup->tanggal }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-2">
                                        {{ $topup->status }}
                                    </td>
                            </tr>
                            @empty

                            @endforelse
                        </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
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
            sidenav - 2,
            initTE,
        } from "tw-elements";
        initTE({
            sidenav - 2
        });
    </script>

</body>
</html>
