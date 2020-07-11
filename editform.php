<?php 
$id = $_GET['id']; 
//koneksi database
include('dbconnect.php');
//query
$query = "SELECT * FROM buku WHERE id_buku='$id'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>bookworm.id</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 70px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

  #more {display: none;}
  
/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

.table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #f2f5f7;
}
 
.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}
 
.table1, th, td {
    padding: 10px 20px;
    text-align: center;
}
 
.table1 tr:hover {
    background-color: #f5f5f5;
}
 
.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 10px;
  margin: 2px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 2px;
  background-color: #f2f2f2;
  padding: 20px;
}

.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {background-color: #4CAF50;}

form {
    display: grid;
    grid-template-columns: 600px 1fr;
}
</style>
</head>
<body>

<div class="header">
  <h1>BOOKWORM.ID</h1>
  <p><font size="5">Tempat kumpulnya <b>kutu buku</b> Indonesia</font></p>
</div>

<div class="navbar">
  <a href="index.html">Home</a>
  <a href="booktalk.html">Booktalks</a>
  <a href="recs.html">Recommendations</a>
  <a href="join me.html" class="active">Give Your Stars</a>
  <a href="aboutme.html">About Me</a>
  <a href="https://www.instagram.com/bookstagramindonesia/" class="right">Notice Me!</a>
</div>
<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
 <center><h1>Update Data Ulasan Buku</h1></center>
 <form role="form" action="edit.php" method="get">
 
 <?php
 while ($row = mysqli_fetch_assoc($result)) {
 ?>

 <input type="hidden" name="id_bk" value="<?php echo $row['id_buku']; ?>">

 <div class="form-group">
  <label>Judul Buku</label>
  <input type="text" name="judul" class="form-control" value="<?php echo $row['judul']; ?>">   
 </div>

 <div class="form-group">
  <label>Pengarang</label>
  <input type="text" name="pengarang" class="form-control" value="<?php echo $row['pengarang']; ?>">   
 </div>

 <div class="form-group">
  <label>Penerbit Buku</label>
  <input type="text" name="penerbit" class="form-control" value="<?php echo $row['penerbit']; ?>">   
 </div>

 <div class="form-group">
  <label>Jumlah Halaman<label>
  <input type="text" name="halaman" class="form-control" value="<?php echo $row['halaman']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Nomor ISBN<label>
  <input type="text" name="isbn" class="form-control" value="<?php echo $row['isbn']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Tahun Terbit<label>
  <input type="text" name="terbit" class="form-control" value="<?php echo $row['terbit']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Bahasa<label>
  <input type="text" name="bahasa" class="form-control" value="<?php echo $row['bahasa']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Genre<label>
  <input type="text" name="genre" class="form-control" value="<?php echo $row['genre']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Rating<label>
  <input type="text" name="rating" class="form-control" value="<?php echo $row['rating']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Ulasan Singkat<label>
  <input type="text" name="blurb" class="form-control" value="<?php echo $row['blurb']; ?>">   
 </div>
 
 <button type="submit" class="btn btn-success btn-block">Update Data Ulasan</button>

 <?php 
 }
 mysqli_close($conn);
 ?>    
 </form>
</div>
</body>
</html>