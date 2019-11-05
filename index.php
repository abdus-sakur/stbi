<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<?php include 'navbar.php';?>
</head>
<body>
    <div align="center"><br><br><br>
<h3>PENCARIAN KATA DASAR</h3>
<form method="post" action="">
<input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
<input class="btnForm" type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}
?>

<br><br><br>
<div align="center">
    <h3>Kelompok : </h3>
    <p>Aldy Budi Santoso || 16.01.53.0014</p>
    <p>Abdus Sakur || 16.01.53.0025</p>
</div>
</div>
</body>
</html>