 <?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:loginuser.php'); 
} else { 
   $username = $_SESSION['username']; 
   
}
?>

<body style="background: url(bunga.jpg);">
	<title>index</title>
<div align='center'>
  <h1 style="text-align: center; font-family: sans-serif; color: white;">Selamat Datang, <b><?php echo $username;?></b> <a href="logoutuser.php"><b>Logout</b></a>
</div></h1> 
<!-- <?php
// echo "<h2>Your Input:</h2>";
// echo "Nama : ";
// echo $password;
// echo "<br>";
// echo "Nim : ";
// echo $nim;
// echo "<br>";
// echo "E-mail : ";
// echo $email;
// echo "<br>";
// echo "jurusan : ";
// echo $jurusan;
// echo "<br>";
// echo "Gender : ";
// echo $gender;
// echo "<br>";
// echo "Usia : ";
// echo $usia;
// echo "<br>";
// echo "Website : ";
// echo $website;
// echo "<br>";
// echo "Biografi : ";
// echo $biografi;
// echo "<br>";
// echo $tgl = date("d/m/Y h:i:sa");
// echo "<br>";
?>

<?php
// $result=mysqli_query($connect,'SELECT * FROM user');
// $row=mysqli_fetch_row($result);
// echo "$row[0] $row[1] $row[2] $row[3]";
?> -->


</body>
