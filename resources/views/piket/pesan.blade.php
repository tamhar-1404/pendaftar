<!DOCTYPE html>
<html>
<head>
    <title>Hummasoft</title>
    @vite('resources/css/app.css')

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
    <style>
        /* Reset CSS */
        body, h1, p {
            margin: 0;
            padding: 0;
        }

        /* Container Style */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            background-color: #f8f8f8;
            font-family: Arial, sans-serif;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Logo Style */
        .logo {
            display: block;
            margin: 0 auto;
            width: 150px;
            margin-bottom: 20px;
        }

        /* Title Style */
        .title {
            font-size: 28px;
            font-weight: bold;
            color: #1e2529; /* Blue color */
            margin-top: 20px;
            text-align: center;
        }

        /* Soft Style */
        .soft {
            color: #000; /* Black color */
        }

        /* Body Style */
        .body {
            font-size: 16px;
            color: #000; /* Black color */
            margin-top: 20px;
            text-align: center;
        }

        /* Button Style */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff5722;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <div class="container">
        <center>
            <h1 style="color: #00c3ff;">Humma<span class="soft">soft</span></h1>
        </center>
        <h1 class="title">{{ $title }}</h1>
        <p class="body">{{ $body }}</p> <br>
    </div>
</body>
</html>
