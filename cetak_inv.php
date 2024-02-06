
<!DOCTYPE html>
<html>
<head>
    <title> Cetak Daftar STB </title>
    <link href='img/logo.png' rel='shortcut icon'>
 </head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 10px auto;
 border-collapse: collapse;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 5px 15px;

 }


    .tengah{
        text-align: center;
    }
 </style>


 <table>
    <center>
 <h3>       INVENTORY</h3>
    </center>

 <tr>
                    <th>NO.</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                    <th>Nama Barang</th>
                    <th>User</th>
                    <th>SN</th>
                    <th>Dept</th>
                    <th>ID Asset</th>
                    <th>Keterangan</th>
                    <th>ICT</th>
                  </tr>
 <?php 
 // koneksi database
 include('config.php');

 // menampilkan data pegawai
 $no = 1;
 $data = mysqli_query($conn,"select * from inv");
 while($row = mysqli_fetch_array($data)){
    
 ?>
 <tr style='text-align: center;'>
                      <td style='text-align: center;'><?php echo $no++ ?></td>
                      <td><?php echo $row['tgl_masuk']; ?></td>
                      <td><?php echo $row['tgl_keluar']; ?></td>
                      <td><?php echo $row['nama_barang']; ?></td>
                      <td><?php echo $row['user']; ?></td>
                      <td><?php echo $row['sn']; ?></td>
                      <td><?php echo $row['dept']; ?></td>
                      <td><?php echo $row['asset']; ?></td>
                      <td><?php echo $row['kerusakan']; ?></td>
                      <td><?php echo $row['keterangan']; ?></td>
 </tr>
 <?php 
 }
 ?>
    </table>
    <script>
 window.print();
 </script>
</body>
</html>
