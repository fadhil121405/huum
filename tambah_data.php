<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Siswa</h3>
<hr/>
<form method="post" action="proses.php?action=add">
<table>
<tr>
		<td>ID</td>
		<td>:</td>
		<td><input type="text" name="id"/></td>
	</tr>
	<tr>
		<td>JUDUL</td>
		<td>:</td>
		<td><input type="text" name="judul"/></td>
	</tr>
	
	<tr>
		<td>MUSISI</td>
		<td>:</td>
		<td><input type="text" name="musisi"/></td>
	</tr>
	
	<tr>
		<td>TANGGAL RILIS</td>
		<td>:</td>
		<td><input type="date" name="tanggal_rilis"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>