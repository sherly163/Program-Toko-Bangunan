   <h1 style="margin: 20px 580px;  font-size: 50px; color: rosybrown;"> Update Barang </h1>

   <style type="text/css">
    body{
        background-image: url(bg1.jpg);
        background-size: cover;
    }a {
        color: white;
        text-decoration: none;
    } a:hover{
        color: blue;
    }
</style>

<table border="1" style=" width: 900px;
    height: 500px;
    background-color: rosybrown;
    border-radius: 40px;
    margin: 40px auto;
    padding: 40px;
    box-shadow: 5px 5px 5px #f1f1f1;
    color: white;">
    <tr>
        <th>No</th>
        <th>Kode Barang </th>
        <th>Nama Barang </th>
        <th>Harga</th>
        <th>Stock</th>
        <th colspan="3">Update Data</th>
    </tr>
   

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from barang");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[Id_brg]</td>
            <td>$tampil[Nama_brg]</td>
            <td>$tampil[Harga]</td>
            <td>$tampil[Stock]</td>
            <td><a href='?kode=$tampil[Id_brg]'> Hapus </a></td>
            <td><a href='update.php?kode=$tampil[Id_brg]'> Ubah </a></td>
            <td><a href='?kode=$tampil[Id_brg]'> Terjual </a></td>
        <tr>";
        $no++;

    }
    ?>

    
    </table>

    <a href="http://localhost/Responsi/Responsi.html"><input type="submit" name="kembali" value="Kembali" style="width: 120px;
    height: 40px;
    border-radius: 30px;
    background-color: white;
    font-size: 15px;
    color: rosybrown;
    margin: 0px 700px;">

    <?php
    include "koneksi.php";

    if(isset($_GET['kode'])){
    mysqli_query($koneksi,"delete from barang where Id_brg='$_GET[kode]'");
    
    echo "<meta http-equiv=refresh content=2;URL='hapus.php'>";

    }
    ?>