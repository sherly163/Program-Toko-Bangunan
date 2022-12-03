<h1 style="margin: 20px 540px;  font-size: 50px; color: rosybrown;"> Laporan Penjualan </h1>

<style type="text/css">
    body{
        background-image: url(bg1.jpg);
        background-size: cover;
    }
</style>

<table border="1" style=" width: 900px;
    height: 500px;
    background-color: rosybrown;
    border-radius: 40px;
    margin: 70px auto;
    padding: 40px;
    box-shadow: 5px 5px 5px #f1f1f1;color: white;">
    <tr>
        <th>No</th>
        <th>Kode Barang </th>
        <th>Nama Barang </th>
        <th>Jumlah </th>
        <th>Tanggal</th>
        
      
    </tr>


    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from laporan");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[Id_brg]</td>
            <td>$tampil[Nama_brg]</td>
            <td>$tampil[Jumlah]</td>
            <td>$tampil[Tanggal]</td>
  
            
            
        <tr>";
        $no++;
    }
 
   