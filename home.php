<link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
<?php 	
include('koneksi.php');
$db = new Dbh();
$music = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD OOP</title>
	<h1 style="text-align:center;">DATA LAGU</h1>
</head>
<body>
	<div align="center">
<table class="table table-striped" border="1">
		<tr>
			<th>NO</th>
			<th>ID</th>
			<th>JUDUL</th>
			<th>MUSISI</th>
			<th>TANGGAL RILIS</th>
			<th colspan="2">AKSI</th>
			</tr>
		<?php 
		$no = 1;
		foreach($music as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['judul']; ?></td>
				<td><?php echo $row['musisi']; ?></td>
				<td><?php echo $row['tanggal_rilis']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id']; ?>">UBAH</a>
					<a href="proses.php?action=delete&id=<?php echo $row['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<a class="btn btn-info" href="tambah_data.php">Tambah Data</a>
</body>
</html>