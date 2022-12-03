<h1 style="margin: 50px 575px; font-size: 50px; color: rosybrown;">Tambah Barang </h1>

<style type="text/css">
    body{
        background-image: url(bg1.jpg);
        background-size: cover;
    }
</style>

<form action="" method="post"  style=" width: 400px;
    height: 150px;
    background-color: rosybrown;
    border-radius: 40px;
    margin: 70px auto;
    padding: 40px;
    box-shadow: 5px 5px 5px #f1f1f1;">
<table style="font-size: 20px; color: white" >
    <tr>
        <td width="150";> Kode Barang </td>
        <td> <input type="text" name="Id_brg"> </td>
    </tr>
    <tr>
        <td> Nama Barang </td>
        <td> <input type="text" name="Nama_brg"> </td>
<!-- 
         <td> <input type="text" name="inputtextnamabarangtambah"> </td> -->
    </tr>
    <tr>
        <td> Harga </td>
        <td> <input type="text" name="Harga"> </td>
    </tr>
    <tr>
        <td> Stock </td>
        <td> <input type="text" name="Stock"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>

</table>
  <a href="http://localhost/Responsi/Responsi.html"><input type="submit" name="kembali" value="Kembali" style="width: 120px;
    height: 40px;
    border-radius: 30px;
    background-color: white;
    font-size: 15px;
    color: rosybrown;
    margin: 100px 130px;">

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into barang set  
Id_brg = '$_POST[Id_brg]',
Nama_brg = '$_POST[Nama_brg]',
Harga = '$_POST[Harga]',
Stock = '$_POST[Stock]'");

echo "Data barang baru telah tersimpan";

}

?>