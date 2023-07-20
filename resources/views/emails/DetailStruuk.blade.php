<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Struk Belanja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin: 20px auto;
            max-width: 500px;
            padding: 20px;
            border: 1px solid #ccc;
        }

        h1 {
            color: #00c3ff;
            margin: 0;
        }

        .soft {
            font-weight: normal;
        }

        h2 {
            margin: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Reset CSS */
        body,
        h1,
        p {
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

        /* Title Style */
        .title {
            font-size: 28px;
            font-weight: bold;
            color: #0d47a1;
            /* Blue color */
            margin-top: 20px;
            text-align: center;
        }

        /* Soft Style */
        .soft {
            color: #000;
            /* Black color */
        }

        /* Body Style */
        .body {
            font-size: 16px;
            color: #000;
            /* Black color */
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <center>
            <h1>Humma<span class="soft">store</span></h1>
        </center>
        <h3>Struk Belanja Anda</h3>
        <h4>Tanggal Belanja :{{ date('d F Y') }}</h4>
        </h3>
        <table>
            <tr>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga Barang (per item)</th>
                <th>Total Harga</th>
            </tr>
            @php
                $i = 0;
            @endphp
            @foreach ($saldo['name'] as $item)
                <tr>
                    <td>{{ $item }}</td>
                    <td>{{ $saldo['quantity'][$i] }}</td>
                    <td>{{ $saldo['harga'][$i] }}</td>
                    <td>{{ (int) $saldo['quantity'][$i] * (int) $saldo['harga'][$i] }}</td>
                </tr>
                @php
                    $i++;
                @endphp
            @endforeach
            <!-- Tambahkan baris sesuai dengan data barang yang dibeli -->
            <tr>
                <td colspan="3" style="text-align: right">
                    Total Belanja:
                </td>
                <td>{{ $saldo['total'] }}</td>
                <!-- Ganti nilai dengan total belanja -->
            </tr>
            <tr>
                <td colspan="3" style="text-align: right">Sisa Saldo:</td>
                <td>{{ $saldo['total_saldo'] }}</td>
                <!-- Ganti nilai dengan total saldo -->
            </tr>
        </table>
    </div>
</body>

</html>
