<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat</title>
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
</head>
<body class="w-screen h-screen mt-100 bg-gray-100 ">
    <div class=" absolute top-0 hidden p-6 lg:block lg:px-12">
        <a href="#" class="flex items-center space-x-2">
            <img class="h-12 w-100" src="lineone/images/hummasoft2.png" alt="logo" />
            <p class="text-xl font-semibold uppercase text-slate-700 dark:text-navy-100">
            </p>
        </a>
    </div>
    <div class="flex justify-center items-center w-screen h-screen">
        <form class="bg-gray-900 opacity-75 w-3/4 shadow-lg px-12 rounded-lg">
            <div class="mb-4 flex-col items-center">
                <div class="flex justify-center">
                    <h1 class="my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left">
                        Scan RFID
                    </h1>
                </div>
              <input
                class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition "
                id="emailaddress"
                type="text"
                placeholder=""
              />
            </div>

            <div class="flex items-center justify-between pt-4">

            </div>
          </form>

    </div>
</body>
</html>
