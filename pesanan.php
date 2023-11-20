<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="row justify-content-between">
    <div class="col-10"><b>Pesanan </b></div>
    <div class="col-2 d-flex justify-content-end align-items-end">
      <button class="btn btn-dark btn-sm" type="button">add</button>
    </div>
  </div>
  <hr>
  <table class="table table-sm border border-dark">
    <thead class="thead-dark">
      <tr>
        <th scope="col" width="5%">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Kategori</th>
        <th scope="col">Harga</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Tanggal</th>
        <th scope="col" width="12%">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $que = "SELECT * FROM detail_pesanan 
      JOIN pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan 
      JOIN produk ON produk.id_produk = detail_pesanan.id_produk 
      JOIN kategori ON kategori.id_kategori = produk.id_kategori";
      $select = mysqli_query($con, $que);
      while($data = mysqli_fetch_array($select)){
      ?>
      <tr>
        <th scope="row"><?php echo $data['id_pesanan']; ?></th>
        <td><?php echo $data['nama_produk']; ?></td>
        <td><?php echo $data['nama_kategori']; ?></td>
        <td><?php echo $data['harga']; ?></td>
        <td><?php echo $data['jumlah']; ?></td>
        <td><?php echo $data['tanggal_pesanan']; ?></td>
        <td>
          <button class="btn btn-dark btn-sm" type="button">edit</button>
          <button class="btn btn-dark btn-sm" type="button">delete</button>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>