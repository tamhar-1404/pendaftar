<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="fixed z-10 inset-0 overflow-y-auto hidden">
        <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
          <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
          </div>
          <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 w-30">
              <div class="max-w-7xl mx-auto">
                <div class="flex flex-col">
                  <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                    Form Tambah Guru
                  </h3>
                 <form action="{{ route('guru_admin.store') }}" class="mt-4" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4">
                        <label for="Nama" class="block text-gray-700 font-medium mb-2">Foto</label>
                        <input type="file" name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                      </div>
                      <div class="mt-4">
                        <label for="Nama" class="block text-gray-700 font-medium mb-2">Nama</label>
                        <input type="text" placeholder="Masukkan nama " id="sekolah" name="nama" class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                      </div>
                    <div class="mt-4">
                      <label for="Nama" class="block text-gray-700 font-medium mb-2">Sekolah</label>
                      <input type="text" placeholder="Masukkan nama " id="sekolah" name="sekolah" class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div class="mt-4">
                      <label for="sekolah" class="block text-gray-700 font-medium mb-2">Email</label>
                      <input type="email" placeholder="Masukkan nama sekolah" id="sekolah" name="email" class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div class="mt-4">
                        <label for="sekolah" class="block text-gray-700 font-medium mb-2">Alamat</label>
                    <textarea name="alamat" id="" cols="65" rows="5" class="border border-1" placeholder="Masukkan alamat anda"></textarea>
                    </div>
                    <div class="mt-4">
                        <label for="tanggal_lahir" class="block text-gray-700 font-medium mb-2">No telephone </label>
                        <input type="number" id="tanggal_lahir" name="no" class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                      </div>
                    <div class="mt-4">
                      <label for="email" class="block text-gray-700 font-medium mb-2">Password</label>
                      <input type="password" placeholder="Masukkan password" id="email" name="password" class="block w-full h-9 px-4 rounded-md bg-white border border-gray-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div class="flex items-center justify-end mt-4">
                      <div class="ml-auto">
                        <button type="button" class="bg-transparent border border-gray-300 text-gray-800 hover:bg-gray-300 hover:text-gray-800 font-bold py-2 px-4 rounded">
                          Batal
                        </button>
                      <button type="submit" class="btn btn-primary">Tambah</button>
                          <script>
                              async function showAlert() {
                                  new window.Swal({
                                      title: "Berhasil",
                                      text: "Data berhasil di tambahkan",
                                      icon: "success",
                                      button: "oke",
                                  });
                              }
                        </script>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>