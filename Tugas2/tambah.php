<?php
include "koneksi.php";

$nrp = $_POST['nrp'];
$nm = $_POST['nama'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$jur = $_POST['jurusan'];


$fotobaru = date('dmYHis').$foto;
$path = "foto/".$fotobaru;


if(move_uploaded_file($tmp, $path)){
$sql = "INSERT INTO mahasiswa(nrp,nama,foto,ID_Jur) VALUES('$nrp','$nm','$fotobaru','$jur')";
$query = mysqli_query($koneksi, $sql); 


if($query){
    echo "Data berhasil ditambahkan";
}else{
    echo "Error: ".$sql."<br>".mysqli_error($koneksi);
}
  }else{    
    echo "Mohon maaf, Gambar gagal diupload.";
    }
mysqli_close($koneksi);

?>