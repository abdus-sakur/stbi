<?php
//membuat koneksi ke database
$servername = "localhost";
$username = "id11470167_sadstk";
$password = "sadstk458";
$dbname = "id11470167_sadstk";

$connection = mysqli_connect($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style1.css">
   <meta charset="UTF-8">
   <title>Korpus Putusan PN, PT, dan MA</title>
   <?php include 'navbar.php';?>
</head>
<body>
<html>
  
    <head>
        
       <h2>HASIL TOKENISASI DAN STEMMING</h2>
        
    </head>
    <body>
        <?php


        ?>
 


<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->
    
 <table id="rowhover" class="isi"> 
<tr>
    <th> Nama File </th>
    <th> Tokenisasi </th>
    <th> Stemming Porter </th>
    <th> Stemming Nazief Adriani</th>
    
</tr>

<?php  
// Perintah untuk menampilkan data
$query="SELECT * FROM dokumen" ;  //menampikan SEMUA

 $sql = mysqli_query($connection, $query);

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($sql)) {
$id = $data['dokid'];
?>
<tr>
                 
        <td>
            <?php echo $data['nama_file']; ?>
        </td>
        <td>
            <?php echo $data['token']; ?>
        </td>
        <td>
            <?php echo $data['tokenstem']; ?>
        </td>
        <td>
            <?php echo $data['tokenstem2']; ?>
        </td>
 
 <?php       
}

?>

</table>
</div>

</div>
</body>
</html>