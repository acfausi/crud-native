<?php 

function koneksi()
{

	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "latihan2";


	$con = mysqli_connect("$server","$username","$password","$database");
	return $con;

}


function getsaya()
{
	$data=mysqli_query(koneksi(), "SELECT * FROM portofolio");
	return $data;

}


function inputData($nama,$alamat,$jabatan,$email,$telepon)
{
	return mysqli_query (koneksi(), "INSERT INTO portofolio values (null, '$nama','$alamat','$jabatan','$email','$telepon')");
}


function hapusData($id)
{
	return mysqli_query(koneksi(), "DELETE FROM portofolio WHERE id_saya ='$id'");
}


function editTampil($id)
{

	$data = mysqli_query(koneksi(), "SELECT * FROM portofolio where id_saya = '$id'");

	return $data;
}

function editAction($nama,$alamat,$jabatan,$email,$telepon,$id)
{
	$update=mysqli_query(koneksi(), "UPDATE portofolio SET nama='$nama',alamat='$alamat',jabatan='$jabatan',email='$email',telepon='$telepon' where id_saya='$id'");
	return $update;
}


 ?>
