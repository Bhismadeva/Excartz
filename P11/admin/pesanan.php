<div class="row justify-content-between">
	<div class="col-10"><b>Pesanan </b></div>
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
		$que   	= "SELECT * FROM detailpesanan JOIN pesanan ON pesanan.id_pesanan = detailpesanan.id_pesanan JOIN produk ON produk.id_produk = detailpesanan.id_produk JOIN kategori ON kategori.id_kategori = produk.id_kategori";
		$select = mysqli_query($con,$que);

		while($data= mysqli_fetch_array($select)){

			?>

			<tr>
				<th scope="row"><?php echo $data['id_detailpesanan']; ?></th>
				<td><?php echo $data['nama_produk']; ?></td>
				<td><?php echo $data['nama_kategori']; ?></td>
				<td>
					<?php
					$uang = $data['harga'];
					$uang_format = number_format($uang, 0, ',', '.');
					echo "Rp. " . $uang_format;
					?>					
				</td>
				<td><?php echo $data['jumlah']; ?></td>
				<td><?php echo $data['tanggal_pesanan']; ?></td>
				<td>
					<button class="btn btn-dark btn-sm" type="button">edit</button>
					<a href="index.php?page=pesanan-del&id=<?php echo $data['id_pesanan']; ?>"><button class="btn btn-dark btn-sm" type="button">delete</button></a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>