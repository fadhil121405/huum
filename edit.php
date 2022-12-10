<?php 	
include('koneksi.php');
$db = new Dbh();
$id = $_GET['id'];
if(! is_null($id))
{
	$music = $db->get_by_id($id);
}
else
{
	header('location:home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data Musik</h3>
<hr/>
<form method="post" action="proses.php?action=update">
<input type="hidden" name="id" value="<?php echo $music['id']; ?>"/>
<table>
	<tr>
		<td>ID</td>
		<td>:</td>
		<td><input type="text" name="id" value="<?php echo $music['id']; ?>"/></td>
	</tr>
	<tr>
		<td>JUDUL</td>
		<td>:</td>
		<td><input type="text" name="judul" value="<?php echo $music['judul']; ?>"/></td>
	</tr>
	<tr>
		<td>MUSISI</td>
		<td>:</td>
		<td><input type="text" name="musisi" value="<?php echo $music['musisi']; ?>"/></td>
	</tr>
	<tr>
		<td>TANGGAL RILIS</td>
		<td>:</td>
		<td><input type="text" name="kelas" value="<?php echo $music['tanggal_rilis']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>