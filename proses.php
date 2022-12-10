<?php 
include('koneksi.php');
$koneksi = new Dbh();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['id'],$_POST['judul'],$_POST['musisi'],$_POST['tanggal_rilis']);
	header('location:home.php');
}
elseif($action=="update")
{
	$koneksi->tambah_data($_POST['id'],$_POST['judul'],$_POST['musisi'],$_POST['tanggal_rilis']);
	header('location:home.php');
}
elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_data($id);
	header('location:home.php');
}
?>