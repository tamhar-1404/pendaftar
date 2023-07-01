<?php
    $id = $_POST['id'];
    $detail = $this->db->query("select * from approval_izin where id ='$id'")->resault_array();
?>
 <?php
      foreach ($detail as $izin) {
 ?>
  <!-- Modal body -->
    <div>
        <p class="text-base leading-relaxed font-bold  text-gray-800 dark:text-gray-400">
            Nama
        </p>
        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
            {{ $izin->nama }}
        </p>
    </div>
    <div>
      <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
          Sekolah
      </p>
      <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
          {{ $izin->sekolah }}
      </p>
    </div>
    <div>
        <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
            Tanggal awal
        </p>
        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
            {{ $izin->dari }}
        </p>
    </div>
    <div>
        <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
            Tanggal akhir
        </p>
        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
            {{ $izin->sampai }}
        </p>
    </div>
    <div>
        <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
            keterangan
        </p>
        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
            {{ $izin->keterangan }}
        </p>
    </div>
    <div>
        <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
            deskripsi
        </p>
        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
            {{ $izin->deskripsi }}
        </p>
    </div>
    <div>
        <p class="text-base leading-relaxed font-bold text-gray-800 dark:text-gray-400">
            Bukti
        </p>
        <img src="{{ asset('storage/bukti_izin' . $izin->bukti) }}" alt="image">
    </div>
  <?php
}
?>
