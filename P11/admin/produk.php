<div class="row justify-content-between">
	<div class="col-10"><b>Produk </b></div>
	<div class="col-2 d-flex justify-content-end align-items-end">
		<a href="index.php?page=produk-add"><button class="btn btn-dark btn-sm" type="button">add</button></a>
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
			<th scope="col">Gambar</th>
			<th scope="col" width="12%">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$que   	= "SELECT * FROM produk INNER JOIN kategori ON produk.id_kategori=kategori.id_kategori order by id_produk";
		$select = mysqli_query($con,$que);

		while($data= mysqli_fetch_array($select)){

			?>

			<tr>
				<th scope="row"><?php echo $data['id_produk']; ?></th>
				<td><?php echo $data['nama_produk']; ?></td>
				<td><?php echo $data['nama_kategori']; ?></td>
				<td class="align-right">
					<?php
					$uang = $data['harga'];
					$uang_format = number_format($uang, 0, ',', '.');
					echo "Rp. " . $uang_format;
					?>					
				</td>
				<td><?php echo $data['gambar']; ?></td>
				<td>
					<button class="btn btn-dark btn-sm" type="button">edit</button>
					<a href="index.php?page=produk-del&id=<?php echo $data['id_produk']; ?>"><button class="btn btn-dark btn-sm" type="button">delete</button></a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
