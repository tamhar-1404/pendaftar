<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    @import url("https://fonts.googleapis.com/css?family=Bungee");

    body {
        background: #000000;
        color: white;
        font-family: "Bungee", cursive;
        margin-top: 50px;
        text-align: center;
    }
    a {
        color: #2aa7cc;
        text-decoration: none;
    }
    a:hover {
        color: white;
    }
    svg {
        width: 50vw;
    }
    .lightblue {
        fill: #ff0000;
    }
    .eye {
        transform-origin: center center;
        animation: lookAround 2s infinite alternate;
    }
    @keyframes lookAround {
        100% {
            transform: translateX(10px);
        }
        100% {
            transform: translateX(6px);
        }
    }
    .error-text {
        font-size: 120px;
    }
    .alarm {
        animation: alarmOn 0.5s infinite;
    }

    @keyframes alarmOn {
        to {
            fill: darkred;
        }
    }
</style>
<body>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 118.9" role="img">
        <title xml:lang="en">403 Error</title>
        <defs>
            <clipPath id="white-clip">
                <circle id="white-eye" fill="#cacaca" cx="130" cy="65" r="20" />
            </clipPath>
            <text id="text-s" class="error-text" y="106"> 403 </text>
        </defs>
        <path class="alarm" fill="#e62326" d="M120.9 19.6V9.1c0-5 4.1-9.1 9.1-9.1h0c5 0 9.1 4.1 9.1 9.1v10.6" />
        <use xlink:href="#text-s" x="-0.5px" y="-1px" fill="black"></use>
        <use xlink:href="#text-s" fill="#2b2b2b"></use>
        <g id="robot">
            <g id="eye-wrap">
                <use xlink:href="#white-eye"></use>
                <circle id="eyef" class="eye" clip-path="url(#white-clip)" fill="#000" stroke="#2aa7cc" stroke-width="2" stroke-miterlimit="10" cx="130" cy="65" r="11" />
                <ellipse id="white-eye" fill="#2b2b2b" cx="130" cy="40" rx="18" ry="12" />
            </g>
            <circle class="lightblue" cx="105" cy="32" r="2.5" id="tornillo" />
            <use xlink:href="#tornillo" x="50"></use>
            <use xlink:href="#tornillo" x="50" y="60"></use>
            <use xlink:href="#tornillo" y="60"></use>
        </g>
    </svg>
    <h1>Halaman tidak tersedia</h1>
    <h2> <a href="{{ url()->previous() }}">Kembali</a></h2>
</body>
</html>
