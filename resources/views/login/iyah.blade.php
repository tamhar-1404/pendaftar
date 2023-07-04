<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Waktu Sekarang</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-2">Data Waktu Sekarang</h1>
        <div id="waktu-sekarang" class="text-xl font-semibold"></div>
        <div id="pesan-batas" class="text-red-500 font-semibold"></div>
    </div>


  <script>
    const waktuSekarangElement = document.getElementById('waktu-sekarang');
    const pesanBatasElement = document.getElementById('pesan-batas');

    function updateWaktuSekarang() {
    const sekarang = new Date();
    const hari = sekarang.toLocaleDateString('id-ID', { weekday: 'long' });
    const tanggal = sekarang.toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' });
    const jam = sekarang.toLocaleTimeString('id-ID', { hour: 'numeric', minute: 'numeric', second: 'numeric' });

    const waktuSekarang = `${hari}, ${tanggal} - ${jam}`;
    waktuSekarangElement.innerText = waktuSekarang;

    const batasJam = 20; // Batasan jam, dalam format 24 jam
    const batasMenit = 27; // Batasan menit
    const saatJam = sekarang.getHours(); // Jam saat ini
    const saatMenit = sekarang.getMinutes(); // Menit saat ini

    if (saatJam === batasJam || (saatJam === batasJam && saatMenit === batasMenit)) {
        pesanBatasElement.innerText = "Waktu sudah melewati batas!";
        // Atau Anda dapat menambahkan logika lain yang diinginkan
    } else {
        pesanBatasElement.innerText = ""; // Menghapus pesan jika waktu masih dalam batasan
    }
    }

    setInterval(updateWaktuSekarang, 1000);
  </script>
</body>
</html>
