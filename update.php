<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from barang where Id_brg='$_GET[kode]'");
$data=mysqli_fetch_array($sql);
?>

<h1 style="margin: 50px 625px"> Update Barang </h1>

<style type="text/css">
    body{
        background-image: url(bg1.jpg);
        background-size: cover;
    }
</style>

<form action="" method="post" style="width: 300px;
    height: 200px;
    background-color: rosybrown;
    border-radius: 40px;
    margin: 100px 580px;
    padding: 40px;
    box-shadow: 5px 5px 5px #f1f1f1;">
<table>

    <tr>
        <td width="200"> Kode Barang </td>
        <td> <input type="text" name="Id_brg" value="<?php echo $data['Id_brg']; ?>"> </td>
    </tr>
    <tr>
        <td> Nama Barang </td>
        <td> <input type="text" name="Nama_brg" value="<?php echo $data['Nama_brg']; ?>"> </td>
    </tr>
    <tr>
        <td> Harga </td>
        <td> <input type="text" name="Harga" value="<?php echo $data['Harga']; ?>"> </td>
    </tr>
    <tr>
        <td> Stock </td>
        <td> <input type="text" name="Stock" value="<?php echo $data['Stock']; ?>"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah"> </td>
    </tr>

</table>
 <a href="http://localhost/Responsi/Responsi.html"><input type="submit" name="kembali" value="Kembali" style="width: 120px;
    height: 40px;
    border-radius: 30px;
    background-color: white;
    font-size: 15px;
    color: rosybrown;
    margin: 200px 90px;">

</form>

<?php
include "koneksi.php";


if(isset($_POST['proses'])){
mysqli_query($koneksi, "update barang set  
Nama_brg = '$_POST[Nama_brg]',
Harga = '$_POST[Harga]',
Stock = '$_POST[Stock]'
where Id_brg = '$_GET[kode]'");

echo "Data barang telah diubah";
echo "<meta http-equiv=refresh content=1;URL='hapus.php'>";

}

?>