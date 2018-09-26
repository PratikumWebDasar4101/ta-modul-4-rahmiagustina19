<?php 
session_start();
$nama = $_POST['nama'] ;
$password = $_POST['password'];

$_SESSION['nama'] 	= isset($_POST['nama']) ? $_POST["nama"]:$_SESSION["nama"];
$_SESSION['password']	= isset($_POST['password']) ? $_POST["password"]:$_SESSION["password"];
$_SESSION['iduser'] = 123;

if(isset($_GET['ancur'])){
	session_destroy();
	header("Location: login.php");
}

$data = array(
			array( 
				"nama" =>"Rahmi" ,
				"password" =>"123"),
			array(  
				"nama" =>"Nadisya",
				"password"=>"223"
				),
      array( 
        "nama" =>"Acyla" ,
        "password" =>"322"),
		);
if ($nama == $data[1]["nama"] && $password == $data[1]['password']||
	$nama == $data[2]["nama"] && $password == $data[2]['password']||
  $nama == $data[0]["nama"] && $password == $data[0]['password']) {
	echo "<h><b>Belanja Online</b><h1>";
}else{
	header("location: login.php");
}
 ?>
	<form action="output.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
  		<td>Daftar Barang Belanjaan</td>
  	</tr>
  	<tr>
      <td><input type="checkbox" name="belanjaan[]" value="TV">TV</td>
    </tr>
    <tr>
  		<td><input type="checkbox" name="belanjaan[]" value="Mesin Cuci">Mesin Cuci</td>
    </tr>
    <tr>
  		<td><input type="checkbox" name="belanjaan[]" value="Kipas Angin">Kipas Angin</td>
    </tr>
    <tr>
    	<td>Jenis Pengiriman</td>
    </tr>
    <tr>
    	<td><input type="radio" name="pengiriman" value="JNE">JNE</td>
    </tr>
    <tr>
    	<td><input type="radio" name="pengiriman" value="J&T">J&T</td>
    </tr>
    <tr>	
  		<td><input type="radio" name="pengiriman" value="TiKi">TiKi</td>
  	</tr>
    <tr>
    	<td>Alamat</td>
    </tr>
    <tr>
      <td:</td>
    </td:<>
    <tr>
    	<td><input type="text" name="alamat"></td>
    </tr>
    <tr>
      <td><input type="submit" name="" value="Kirim">
</td>
    </tr>
</table>
</form>
<?php 

 ?>