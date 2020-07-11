<?php
//include('dbconnected.php');
include('dbconnect.php');

$id = $_GET['id_buku'];
$judul = $_GET['judul'];
$pengarang = $_GET['pengarang'];
$penerbit = $_GET['penerbit'];
$halaman = $_GET['halaman'];
$isbn = $_GET['isbn'];
$terbt = $_GET['terbit'];
$bahasa = $_GET['bahasa'];
$genre = $_GET['genre'];
$rating = $_GET['rating'];
$blurb = $_GET['blurb'];

//query update
$query = "UPDATE buku SET judul='$judul' , pengarang='$pengarang' , penerbit='$penerbit' ,
halaman='$halaman', isbn='$isbn', terbit='$terbit', bahasa='$bahasa', genre='$genre', rating='$rating',
blurb='$blurb'  WHERE id_buku='$id' ";

if (mysqli_query($conn, $query)) {
 # credirect ke page review
 header("location:review.php");
 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>