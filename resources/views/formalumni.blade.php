<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Alumni</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    function toggleFields() {
      const status = document.getElementById("status").value;
      document.getElementById("kuliahFields").style.display = status === "kuliah" ? "block" : "none";
      document.getElementById("kerjaFields").style.display = status === "kerja" ? "block" : "none";
      document.getElementById("wirausahaFields").style.display = status === "wirausaha" ? "block" : "none";
    }
  </script>
</head>
<body class="bg-gradient-to-r from-blue-500 to-blue-100 flex items-center justify-center min-h-screen">
  <div class="bg-white/30 backdrop-blur-md p-6 rounded-lg shadow-md w-full max-w-2xl overflow-y-auto max-h-screen">
    <h2 class="text-2xl font-bold text-center mb-4 text-blue-600">Form Alumni</h2>
    <form action="{{ route('formalumni.store') }}" method="POST">
    @csrf
      <div>
        <label class="block font-semibold">NISN</label>
        <input type="text" name="nisn" placeholder="NISN" class="border p-2 rounded w-full" required>
      </div>
      <div>
        <label class="block font-semibold">Nama</label>
        <input type="text" name="nama" placeholder="Nama" class="border p-2 rounded w-full" required>
      </div>
      <div>
        <label class="block font-semibold">Alamat</label>
        <input type="text" name="alamat" placeholder="Alamat" class="border p-2 rounded w-full" required>
      </div>
      <div>
        <label class="block font-semibold">Email</label>
        <input type="email" name="email" placeholder="Email" class="border p-2 rounded w-full" required>
      </div>
      <div>
        <label class="block font-semibold">Nomor HP</label>
        <input type="tel" name="no_hp" placeholder="Nomor HP" class="border p-2 rounded w-full" required>
      </div>
      <div>
        <label class="block font-semibold">Jurusan</label>
        <select name="jurusan" class="border p-2 rounded w-full" required>
          <option value="">Pilih Jurusan</option>
          <option value="PPLG">PPLG</option>
          <option value="DKV">DKV</option>
          <option value="TJKT">TJKT</option>
          <option value="ULP">ULP</option>
          <option value="PM">PM</option>
          <option value="MPLB">MPLB</option>
          <option value="AKL">AKL</option>
        </select>
      </div>
      <div>
        <label class="block font-semibold">Tahun Lulus</label>
        <select name="tahun_lulus" class="border p-2 rounded w-full" required>
          <option value="">Pilih Tahun Lulus</option>
          <script>
            let year = new Date().getFullYear();
            for (let i = year; i >= 2000; i--) {
              document.write(`<option value="${i}">${i}</option>`);
            }
          </script>
        </select>
      </div>
      <div>
        <label class="block font-semibold">Status</label>
        <select id="status" name="status" class="border p-2 rounded w-full" required onchange="toggleFields()">
          <option value="">Pilih Status</option>
          <option value="kerja">Bekerja</option>
          <option value="kuliah">Kuliah</option>
          <option value="wirausaha">Berwirausaha</option>
          <option value="tidak">Tidak Bekerja/Kuliah</option>
        </select>
      </div>
      <div id="kerjaFields" style="display: none;" class="space-y-3">
        <label class="block font-semibold">Profesi</label>
        <input type="text" name="profesi" placeholder="Profesi" class="border p-2 rounded w-full">
        <label class="block font-semibold">Jabatan</label>
        <input type="text" name="jabatan" placeholder="Jabatan" class="border p-2 rounded w-full">
        <label class="block font-semibold">Lokasi Kerja</label>
        <input type="text" name="lokasi_kerja" placeholder="Lokasi Kerja" class="border p-2 rounded w-full">
        <label class="block font-semibold">Jumlah Gaji</label>
        <input type="text" name="gaji_kerja" placeholder="Jumlah Gaji" class="border p-2 rounded w-full">
        <label class="block font-semibold">Alasan Bekerja</label>
        <textarea name="alasan_kerja" placeholder="Alasan bekerja" class="border p-2 rounded w-full"></textarea>
      </div>
      <div id="kuliahFields" style="display: none;" class="space-y-3">
        <label class="block font-semibold">Nama Kampus</label>
        <input type="text" name="kampus" placeholder="Nama Kampus" class="border p-2 rounded w-full">
        <label class="block font-semibold">Jurusan</label>
        <input type="text" name="jurusan_kuliah" placeholder="Jurusan" class="border p-2 rounded w-full">
        <label class="block font-semibold">Lokasi Kuliah</label>
        <input type="text" name="lokasi_kuliah" placeholder="Lokasi Kuliah" class="border p-2 rounded w-full">
        <label class="block font-semibold">Alasan Kuliah</label>
        <textarea name="alasan_kuliah" placeholder="Alasan kuliah" class="border p-2 rounded w-full"></textarea>
      </div>
      <div id="wirausahaFields" style="display: none;" class="space-y-3">
        <label class="block font-semibold">Bidang Usaha</label>
        <input type="text" name="bidang_usaha" placeholder="Bidang Usaha" class="border p-2 rounded w-full">
        <label class="block font-semibold">Lokasi Wirausaha</label>
        <input type="text" name="lokasi_wirausaha" placeholder="Lokasi Wirausaha" class="border p-2 rounded w-full">
        <label class="block font-semibold">Jumlah Gaji</label>
        <input type="text" name="gaji_wirausaha" placeholder="Jumlah Gaji" class="border p-2 rounded w-full">
        <label class="block font-semibold">Alasan Berwirausaha</label>
        <textarea name="alasan_wirausaha" placeholder="Alasan berwirausaha" class="border p-2 rounded w-full"></textarea>
      </div>
      <button type="submit" class="bg-blue-600 text-white py-2 rounded hover:bg-blue-700 w-full">Kirim</button>
    </form>
  </div>
</body>
</html>
