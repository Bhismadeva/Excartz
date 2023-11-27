<?php  
if (isset($_POST['submit'])) {

    $id       = $_POST["id_produk"]; 
    $jumlah   = $_POST["jumlah"]; 

    include "koneksi.php";

    $queryPesanan = "INSERT INTO pesanan (tanggal_pesanan) VALUES (NOW())";
    $resultPesanan = mysqli_query($con, $queryPesanan);

    if ($resultPesanan) {

        $idPesanan = mysqli_insert_id($con);

		$reset	= "alter table detailpesanan AUTO_INCREMENT = 1";
		$query	= mysqli_query($con,$reset);

        $queryDetailPesanan = "INSERT INTO detailpesanan (id_produk, jumlah, id_pesanan) VALUES ('$id', '$jumlah', '$idPesanan')";
        $resultDetailPesanan = mysqli_query($con, $queryDetailPesanan);

    }

    mysqli_close($con);
    header("Location: index.php");
}
?> 