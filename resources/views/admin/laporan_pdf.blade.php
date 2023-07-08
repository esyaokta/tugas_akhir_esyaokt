<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Laporan Bulan Ini</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #999;
      padding: 0.5rem;
      text-align: left;
    }
  </style>
</head>

<body>
  <div class="flex flex-col justify-center gap-10">
    <div class="flex justify-center items-center w-full" style="text-align: center">
      LAPORAN BULANAN
    </div>

    <!-- Laporan Barang -->
    <div class="flex justify-start">
      <h4 class="text-2xl font-semibold">Data Barang</h4>
    </div>
    <div class="relative overflow-x-auto">
      <table>
        <thead>
          <tr>
            <th scope="col" class="px-6 py-3 border-r border-black">
              ID
            </th>
            <th scope="col" class="px-6 py-3 border-r border-black">
              JENIS
            </th>
            <th scope="col" class="px-6 py-3 border-r border-black">
              KATEGORI
            </th>
            <th scope="col" class="px-6 py-3 border-r border-black">
              MEREK
            </th>
            <th scope="col" class="px-6 py-3 border-r border-black">
              JUMLAH
            </th>
            <th scope="col" class="px-6 py-3 border-r border-black">
              TGL MASUK
            </th>
            <th scope="col" class="px-6 py-3 border-r border-black">
              KONDISI
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($barang as $b)
            <tr class="bg-[#FFFCFC] dark:bg-gray-800 dark:border-gray-700 border-b border-black">
              <th scope="row" class="px-6 py-4 border-r border-black ">
                {{ $loop->iteration }}
              </th>
              <td class="px-6 py-4 border-r border-black capitalize">
                {{ $b->jenis_barang }}
              </td>
              <td class="px-6 py-4 border-r border-black capitalize">
                {{ $b->kategori }}
              </td>
              <td class="px-6 py-4 border-r border-black">
                {{ $b->merek }}
              </td>
              <td class="px-6 py-4 border-r border-black">
                {{ $b->jumlah_barang }}
              </td>
              <td class="px-6 py-4 border-r border-black">
                {{ $b->tanggal_masuk }}
              </td>
              <td class="px-6 py-4 border-r border-black capitalize">
                {{ $b->kondisi_barang }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <!-- Laporan Peminjaman -->
    <div class="flex justify-start">
      <h4 class="text-2xl font-semibold">Data Peminjaman</h4>
    </div>
    <div class="relative overflow-x-auto" style="display: flex; justify-content:center; align-items:center; width:100%">
      <table style="width: 100%;">
        <thead
          class="text-base text-gray-700 uppercase bg-[#FFFCFC] dark:bg-gray-700 dark:text-gray-400 border-b border-black">
          <tr>
            <th scope="col">
              ID
            </th>
            <th scope="col">
              NAMA KEGIATAN
            </th>
            <th scope="col">
              TANGGAL PINJAM
            </th>
            <th scope="col">
              JAM PINJAM
            </th>
            <th scope="col">
              JAM SELESAI
            </th>
            <th scope="col">
              PERSETUJUAN
            </th>
            <th scope="col">
              ALASAN
            </th>
            <th scope="col">
              NAMA PEMINJAM
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($peminjaman as $p)
            <tr class="bg-[#FFFCFC] dark:bg-gray-800 dark:border-gray-700 border-b border-black">
              <th scope="row" class="px-6 py-4 border-r border-black ">
                {{ $p->id }}
              </th>
              <td class="px-6 py-4 border-r border-black">
                {{ $p->nama_kegiatan }}
              </td>
              <td class="px-6 py-4 border-r border-black">
                {{ $p->tanggal_pinjam }}
              </td>
              <td class="px-6 py-4 border-r border-black">
                {{ $p->jam_pinjam }}
              </td>
              <td class="px-6 py-4 border-r border-black">
                {{ $p->jam_selesai }}
              </td>
              <td class="px-6 py-4 border-r border-black">
                {{ $p->persetujuan }}
              </td>
              <td class="px-6 py-4 border-r border-black">
                {{ $p->alasan }}
              </td>
              <td class="px-6 py-4 border-r border-black capitalize">
                {{ $p->user->nama }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>
