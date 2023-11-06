<?php

// Array multidimensi berisi data produk, stok, dan harga
$produk = array(
    array("Produk" => "Minyak Telon", "Stok" => 20, "Harga" => 30000),
    array("Produk" => "Diapers", "Stok" => 15, "Harga" => 51000),
    array("Produk" => "Baby Oil", "Stok" => 10, "Harga" => 16000),
    array("Produk" => "Shampo Baby", "Stok" => 18, "Harga" => 20000),
    array("Produk" => "Bedak", "Stock" => 15, "Harga" => 15000),
    array("Produk" => "Baju Bayi", "Stok" => 20, "Harga" => 35000),
    array("Produk" => "Jumper","Stock" => 25, "Harga" => 50000)
);

// Inisialisasi total jumlah harga barang
$total_harga_barang = 0;

// Membuat tabel untuk menampilkan data produk
echo "<table border='1'>";
echo "<tr><th>Produk</th><th>Stok</th><th>Harga</th></tr>";

foreach ($produk as $item) {
    echo "<tr>";
    echo "<td>" . $item["Produk"] . "</td>";
    echo "<td>" . (isset($item["Stok"]) ? $item["Stok"] : "N/A") . "</td>";
    echo "<td>" . (isset($item["Harga"]) ? $item["Harga"] : "N/A") . "</td>";
    echo "</tr>";

    if (isset($item["Harga"])) {
        $total_harga_barang += $item["Harga"];
    }
}

echo "</table>";

// Menampilkan total jumlah harga barang
echo "Total Jumlah Harga Barang: " . $total_harga_barang;
?>
