// <!-- Otomatisasi Harga Sewa -->

document.getElementById("durasi").addEventListener("change", updateHarga);
document.getElementById("jumlahPemain").addEventListener("change", updateHarga);

function updateHarga() {
  const durasi = document.getElementById("durasi").value;
  const jumlahPemain = document.getElementById("jumlahPemain").value;

  const hargaPerJam = 100000;
  let totalHarga = 0;

  if (jumlahPemain == 10) {
    totalHarga = hargaPerJam * durasi;
  } else if (jumlahPemain == 20) {
    totalHarga = hargaPerJam * durasi * 2;
  } else {
    totalHarga = hargaPerJam * durasi * 3;
  }

  document.getElementById("harga").value = totalHarga;
}
