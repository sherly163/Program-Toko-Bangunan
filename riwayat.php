<h1 style="margin: 20px 530px;  font-size: 50px; color: rosybrown;"> Riwayat Pembaruan </h1>

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
    box-shadow: 5px 5px 5px #f1f1f1; color: white;">
    <tr>
        <th>No</th>
        <th>Nama Barang </th>
        <th>Harga Lama</th>
        <th>Harga Baru</th>
        <th>Stock Lama</th>
        <th>Stock Baru</th>
        <th>Tanggal</th>

      
    </tr>


    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from restock");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[Nama_brg]</td>
            <td>$tampil[Harga_Lama]</td>
            <td>$tampil[Harga_Baru]</td>
            <td>$tampil[Stock_Lama]</td>
            <td>$tampil[Stock_Baru]</td>
            <td>$tampil[Tanggal]</td>
            
        <tr>";
        $no++;
    }
 
   