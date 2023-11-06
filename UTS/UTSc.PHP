<?php

// Array multidimensi berisi data produk, stok, dan harga
$produk = array(
    array("Nama Produk" => "Baju Bayi", "Stok" => 20, "Harga" => 35500),
    array("Nama Produk" => "Diapers", "Stok" => 3, "Harga" => 51000),
    array("Nama Produk" => "Bedak", "Stok" => 1, "Harga" => 15000),
    array("Nama Produk" => "Minyak Telon", "Stok" => 2, "Harga" => 30000)
);

// Fungsi untuk mengurutkan array berdasarkan nama produk
function sortArray($a, $b) {
    return strcasecmp($a['Nama Produk'], $b['Nama Produk']);
}

// Mengurutkan array berdasarkan nama produk
usort($produk, 'sortArray');

// Membuat tabel untuk menampilkan data produk yang dibeli
echo "<table border='1'>";
echo "<tr><th>Nama Produk</th><th>Jumlah</th><th>Harga Satuan</th><th>Total Harga</th></tr>";

$total_pembelian = 0;

foreach ($produk as $item) {
    $nama_produk = $item["Nama Produk"];
    $jumlah = 0;

    if ($nama_produk == "Baju Bayi") {
        $jumlah = 1;
    } elseif ($nama_produk == "Diapers") {
        $jumlah = 3;
    } elseif ($nama_produk == "Bedak") {
        $jumlah = 1;
    } elseif ($nama_produk == "Minyak Telon") {
        $jumlah = 2;
    }

    $harga_satuan = $item["Harga"];
    $total_harga = $harga_satuan * $jumlah;
    $total_pembelian += $total_harga;

    echo "<tr>";
    echo "<td>" . $nama_produk . "</td>";
    echo "<td>" . $jumlah . "</td>";
    echo "<td>" . $harga_satuan . "</td>";
    echo "<td>" . $total_harga . "</td>";
    echo "</tr>";
}

echo "</table>";

// Menampilkan total pembelian
echo "Total Pembelian: " . $total_pembelian;

?>
