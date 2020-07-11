<?php
//add dbconnect

include('dbconnect.php');

$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$halaman = $_POST['halaman'];
$isbn = $_POST['isbn'];
$terbit = $_POST['terbit'];
$bahasa = $_POST['bahasa'];
$genre = $_POST['genre'];
$rating = $_POST['rating'];
$blurb = $_POST['blurb'];

//query

$query =  "INSERT INTO buku(judul, pengarang , penerbit , halaman, isbn, terbit, bahasa, genre, rating, blurb) VALUES('$judul' , '$pengarang' , '$penerbit' , '$halaman', '$isbn', '$terbit', '$bahasa', '$genre', '$rating', '$blurb')";

if (mysqli_query($conn , $query)) {
 # code redicet setelah insert ke review
 header("location:review.php");
}
else{
 echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>