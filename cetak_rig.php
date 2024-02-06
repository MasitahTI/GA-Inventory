
<!DOCTYPE html>
<html>
<head>
    <title>Cetak Radio HT </title>
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
 <h3>       RADIO XIR/RIG</h3>
    </center>

 <tr>
<th >NO.</th>
<th >Tanggal Masuk</th>
<th >Tanggal Keluar</th>
<th >Description</th>
<th >Asset ID</th>
<th >QTY</th>
<th >SN Unit</th>
<th >Dapartemen</th>
<th >REMARK</th>
                  </tr>
 <?php 
 // koneksi database
 include('config.php');

 // menampilkan data pegawai
 $no = 1;
 $data = mysqli_query($conn,"select * from rig");
 while($row = mysqli_fetch_array($data)){
    
 ?>
 <tr style='text-align: center;'>
                      <td style='text-align: center;'><?php echo $no++ ?></td>
                      <td><?php echo $row['tgl_masuk']; ?></td>
                      <td><?php echo $row['tgl_keluar']; ?></td>
                      <td><?php echo $row['description']; ?></td>
                      <td><?php echo $row['asset']; ?></td>
                      <td><?php echo $row['qty']; ?></td>
                      <td><?php echo $row['sn']; ?></td>
                      <td><?php echo $row['dapartemen']; ?></td>
                      <td><?php echo $row['remark']; ?></td>
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
