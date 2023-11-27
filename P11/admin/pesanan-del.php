<?php
	$id = $_GET['id'];
	$result = mysqli_query($con, "DELETE FROM pesanan WHERE id_pesanan=$id");
	header("Location:index.php?page=pesanan");
?>