
<!DOCTYPE html>
<html>
<head>
<title> Cetak Serah Terima </title>
<link href='img/logo.png' rel='shortcut icon'>
</head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 0px auto;
 border-collapse: collapse;
 padding: 15px;
 }
 table th,
 table td{
 /* border: 1px solid #3c3c3c; */
 font-size: 14px;
 padding: 3px 8px;

 }
 .margin {
            margin:30px;
            border: 1px solid #000;
        }
 a{
 background: blue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
 <div class="margin">
        <table style="border: 1px solid black;border-collapse: collapse;font-size: 11px" width="100%">
    <tr>
        <td ><img src="img/...." width="60px"></td>
            <td align="center" height="45" > <span style="font-size: 28px">Berita Acara Serah Terima Barang</span></td>
        </tr>
    </table>
        <table  style="float:left;">
        <?php 
                      include('config.php');
                      $no = 1;
                      $query = mysqli_query($conn,"SELECT `id_diserahkan`, `nama`, `sn`, `jabatan`, `dapartemen`, `site` FROM `diserahkan` WHERE 1");
                      while($row = mysqli_fetch_array($query)){
                  ?>
                   
                    <tr>
                        <td  style="text-decoration: underline"><b>Diserahkan</b></td>
                    </tr>
            <tr>
                <td> Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['nama']; ?> </td>
                 
            </tr>
            <tr>
                <td> SN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['sn']; ?></td>
            </tr>
            <tr>
                <td> Jabatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['jabatan']; ?></td>
            </tr>
            <tr>
                <td> Dapartemen&nbsp;&nbsp;&nbsp;&nbsp;    : <?php echo $row['dapartemen']; ?> </td>
            </tr>
            <tr>
                <td> Site&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['site']; ?></td>
            </tr>
            <?php } ?> 
            </table>
            <table>
            <?php
                      include('config.php');
                      $no = 1;
                      $query = mysqli_query($conn,"SELECT `id_penerima`, `nama`, `sn`, `jabatan`, `dapartemen`, `site` FROM `penerima` WHERE 1");
                      while($row = mysqli_fetch_array($query)){
                        
                    ?>
                                      <tr>
                        <td  style="text-decoration: underline"><b>Diterima</b></td>
                    </tr>
                    <tr>
                <td> Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['nama']; ?> </td>
                 
            </tr>
            <tr>
                <td> SN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['sn']; ?></td>
            </tr>
            <tr>
                <td> Jabatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['jabatan']; ?></td>
            </tr>
            <tr>
                <td> Dapartemen&nbsp;&nbsp;&nbsp;&nbsp;    : <?php echo $row['dapartemen']; ?> </td>
            </tr>
            <tr>
                <td> Site&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['site']; ?></td>
            </tr>
            <?php } ?> 
            </table>
                      </P>
    <p>
        <table style="border: 1px solid black;border-collapse: collapse;font-size: 11px" width="100%">
            <thead>
                  <tr>
                    <th  colspan="2" style="border: 1px solid black;">NO.</th>
                    <th  colspan="2" style="border: 1px solid black;">Description</th>
                    <th  colspan="2" style="border: 1px solid black;">Asset ID</th>
                    <th  colspan="2" style="border: 1px solid black;">QTY</th>
                    <th  colspan="2" style="border: 1px solid black;">UOM</th>
                    <th  colspan="2" style="border: 1px solid black;">REMARK</th>
                  </tr>
                  
                </thead>
            <tbody>
            <?php 
                      include('config.php');
                      $no = 1;
                      $query = mysqli_query($conn,"SELECT `id_serahterima`, `description`, `asset`, `qty`, `uom`, `remark` FROM `serahterima` WHERE 1");
                      while($row = mysqli_fetch_array($query)){
                  ?>
            <tr style="margin: 5px" >
                <td align="center" colspan="2" style="border: 1px solid black;"><?php echo $no++ ?></td>
                <td align="center" colspan="2" style="border: 1px solid black;"><?php echo $row['description']; ?></td>
                <td align="center" colspan="2" style="border: 1px solid black;"><?php echo $row['asset']; ?></td> 
                <td align="center" colspan="2" style="border: 1px solid black;"><?php echo $row['qty']; ?></td>
                <td align="center" colspan="2" style="border: 1px solid black;"><?php echo $row['uom']; ?></td>
                <td align="center" colspan="2" style="border: 1px solid black;"><?php echo $row['remark']; ?></td>
            </tr>

                            
                <?php } ?> 
                </tbody>
                <tr style="margin: 5px" >
                <td align="center" colspan="2" style="border: 1px solid black;"><?php echo $no++ ?></td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td> 
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
            </tr>               
            <tr style="margin: 5px" >
                <td align="center" colspan="2" style="border: 1px solid black;"><?php echo $no++ ?></td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td> 
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
            </tr>                
            <tr style="margin: 5px" >
                <td align="center" colspan="2" style="border: 1px solid black;"><?php echo $no++ ?></td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td> 
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
            </tr>                
            <tr style="margin: 5px" >
                <td align="center" colspan="2" style="border: 1px solid black;"><?php echo $no++ ?></td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td> 
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
            </tr>                
            <tr style="margin: 5px" >
                <td align="center" colspan="2" style="border: 1px solid black;"><?php echo $no++ ?></td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td> 
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
            </tr>                
            <tr style="margin: 5px" >
                <td align="center" colspan="2" style="border: 1px solid black;"><?php echo $no++ ?></td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td> 
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
            </tr>                
            <tr style="margin: 5px" >
                <td align="center" colspan="2" style="border: 1px solid black;"><?php echo $no++ ?></td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td> 
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
            </tr>
           
            <tr style="margin: 5px" >
                <td align="center" colspan="2" style="border: 1px solid black;"><?php echo $no++ ?></td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td> 
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
            </tr>
            <tr style="margin: 5px" >
                <td align="center" colspan="2" style="border: 1px solid black;"><?php echo $no++ ?></td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td> 
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
            </tr>
            <tr style="margin: 5px" >
                <td align="center" colspan="2" style="border: 1px solid black;"><?php echo $no++ ?></td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td> 
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>
                <td align="center" colspan="2" style="border: 1px solid black;"> </td>

            <tr>
                <td align="left" colspan="6" style="border: 1px solid black;">Total Collie        :</td>
                <td align="left" colspan="6" style="border: 1px solid black;">Charge to Acc       :</td>
            </tr>
            <tr>
            <?php 
                      include('config.php');
                      $no = 1;
                      $query = mysqli_query($conn,"SELECT `id_diserahkan`, `nama`, `sn`, `jabatan`, `dapartemen`, `site` FROM `diserahkan` WHERE 1");
                      while($row = mysqli_fetch_array($query)){
                  ?>
                <td align="center" colspan="6">Diserahkan,<br><br><br><br><br><?php echo $row['nama']; ?><hr width="35%"><?php echo date('d - M - Y');?></td>
                <td align="center" colspan="4">Diketahui,<br><br><br><br><br><br> <hr width="65%">-  </td>
                <td align="center" colspan="3">Diterima,<br><br><br><br><br><br> <hr width="35%"><?php echo date(' d - M - Y');?></td>
                <?php } ?>
            </tr>    
        </table>

    <script>
 window.print();
 </script>
 </dv>
</body>
</html>
