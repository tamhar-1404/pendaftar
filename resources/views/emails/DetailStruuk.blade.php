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
    </style>
</head>

<body>
    <div class="container">
        <center>
            <h1>Humma<span class="soft">soft</span></h1>
        </center>
        <h3>Struk Belanja Anda</h2>
            <table>
                <tr>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga Barang (per item)</th>
                    <th>Total Harga</th>
                </tr>
                <tr>
                    <td>Barang 1</td>
                    <td>3</td>
                    <td>10.000</td>
                    <td>30.000</td>
                </tr>
                <tr>
                    <td>Barang 2</td>
                    <td>2</td>
                    <td>20.000</td>
                    <td>40.000</td>
                </tr>
                <tr>
                    <td>Barang 3</td>
                    <td>1</td>
                    <td>50.000</td>
                    <td>50.000</td>
                </tr>
                <!-- Tambahkan baris sesuai dengan data barang yang dibeli -->
                <tr>
                    <td colspan="3" style="text-align: right">
                        Total Belanja:
                    </td>
                    <td>120.000</td>
                    <!-- Ganti nilai dengan total belanja -->
                </tr>
                <tr>
                    <td colspan="3" style="text-align: right">Total Saldo:</td>
                    <td>200.000</td>
                    <!-- Ganti nilai dengan total saldo -->
                </tr>
            </table>
    </div>
</body>

</html>
