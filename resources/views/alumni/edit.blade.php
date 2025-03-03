<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Form Alumni</title>
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
    <h2 class="text-2xl font-bold text-center mb-4 text-blue-600">Edit Form Alumni</h2>
    <form action="{{ route('formalumni.update', $alumni->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div>
        <label class="block font-semibold">NISN</label>
        <input type="text" name="nisn" value="{{ $alumni->nisn }}" class="border p-2 rounded w-full" required>
      </div>
      <div>
        <label class="block font-semibold">Nama</label>
        <input type="text" name="nama" value="{{ $alumni->nama }}" class="border p-2 rounded w-full" required>
      </div>
      <div>
        <label class="block font-semibold">Alamat</label>
        <input type="text" name="alamat" value="{{ $alumni->alamat }}" class="border p-2 rounded w-full" required>
      </div>
      <div>
        <label class="block font-semibold">Email</label>
        <input type="email" name="email" value="{{ $alumni->email }}" class="border p-2 rounded w-full" required>
      </div>
      <div>
        <label class="block font-semibold">Nomor HP</label>
        <input type="tel" name="no_hp" value="{{ $alumni->no_hp }}" class="border p-2 rounded w-full" required>
      </div>
      <div>
        <label class="block font-semibold">Jurusan</label>
        <select name="jurusan" class="border p-2 rounded w-full" required>
          <option value="PPLG" {{ $alumni->jurusan == 'PPLG' ? 'selected' : '' }}>PPLG</option>
          <option value="DKV" {{ $alumni->jurusan == 'DKV' ? 'selected' : '' }}>DKV</option>
          <option value="TJKT" {{ $alumni->jurusan == 'TJKT' ? 'selected' : '' }}>TJKT</option>
          <option value="ULP" {{ $alumni->jurusan == 'ULP' ? 'selected' : '' }}>ULP</option>
          <option value="PM" {{ $alumni->jurusan == 'PM' ? 'selected' : '' }}>PM</option>
          <option value="MPLB" {{ $alumni->jurusan == 'MPLB' ? 'selected' : '' }}>MPLB</option>
          <option value="AKL" {{ $alumni->jurusan == 'AKL' ? 'selected' : '' }}>AKL</option>
        </select>
      </div>
      <div>
        <label class="block font-semibold">Tahun Lulus</label>
        <input type="number" name="tahun_lulus" value="{{ $alumni->tahun_lulus }}" class="border p-2 rounded w-full" required>
      </div>
      <div>
        <label class="block font-semibold">Status</label>
        <select id="status" name="status" class="border p-2 rounded w-full" required onchange="toggleFields()">
          <option value="kerja" {{ $alumni->status == 'kerja' ? 'selected' : '' }}>Bekerja</option>
          <option value="kuliah" {{ $alumni->status == 'kuliah' ? 'selected' : '' }}>Kuliah</option>
          <option value="wirausaha" {{ $alumni->status == 'wirausaha' ? 'selected' : '' }}>Berwirausaha</option>
          <option value="tidak" {{ $alumni->status == 'tidak' ? 'selected' : '' }}>Tidak Bekerja/Kuliah</option>
        </select>
      </div>
      <div id="kerjaFields" style="display: none;">
        <label class="block font-semibold">Profesi</label>
        <input type="text" name="profesi" value="{{ $alumni->profesi }}" class="border p-2 rounded w-full">
        <label class="block font-semibold">Jabatan</label>
        <input type="text" name="jabatan" value="{{ $alumni->jabatan }}" class="border p-2 rounded w-full">
      </div>
      <div id="kuliahFields" style="display: none;">
        <label class="block font-semibold">Nama Kampus</label>
        <input type="text" name="kampus" value="{{ $alumni->kampus }}" class="border p-2 rounded w-full">
        <label class="block font-semibold">Jurusan Kuliah</label>
        <input type="text" name="jurusan_kuliah" value="{{ $alumni->jurusan_kuliah }}" class="border p-2 rounded w-full">
      </div>
      <div id="wirausahaFields" style="display: none;">
        <label class="block font-semibold">Bidang Usaha</label>
        <input type="text" name="bidang_usaha" value="{{ $alumni->bidang_usaha }}" class="border p-2 rounded w-full">
      </div>
      <button type="submit" class="bg-blue-600 text-white py-2 rounded hover:bg-blue-700 w-full">Update</button>
    </form>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", toggleFields);
  </script>
</body>
</html>
