<a href="create.php">Create</a>

<hr>

<?php

if(isset($_GET['nama lengkap']) && isset($_GET['email'])){
// menangkap data
$nama_lengkap = $_GET['nama lengkap'];
$email = $_GET['email'];

// menampilkan data
echo $nama_lengkap;
echo '<br><br>';
echo $email;

}


?>