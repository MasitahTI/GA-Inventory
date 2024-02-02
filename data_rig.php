
        <!-- Sidebar  -->
        <?php
        include "header.php";
        ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
            <!-- <span>Menu</span> -->
        </button>


    </div>
</nav>
<!-- ------ -->

            <div class="card-header">
              MONITORING SERAH TERIMA RADIO RIG
            </div>
            <div class="card-body">
              <a href="rig.php" class="btn btn-md btn-success" style="margin-bottom: 10px"><i class="fa fa-plus"></i></a>
              <!-- <a href="cetak_rig.php" class="btn btn-md btn-danger" style="margin-bottom: 10px">CETAK PDF</a><br> -->
              <!-- <a href="excel_daftar.php" class="btn btn-md btn-danger" style="margin-bottom: 10px">EXPORT EXCEL</a><br> -->
            <br>
              <font size="1">*Tanggal keluar bisa dimasukkan saat di edit</font>
              <table class="table table-bordered myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Tanggal Keluar</th>
                    <th scope="col">Description</th>
                    <th scope="col">Asset ID</th>
                    <th scope="col">QTY</th>
                    <th scope="col">SN Unit</th>
                    <th scope="col">Dapartemen</th>
                    <th scope="col">REMARK</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                      include('config.php');
                      if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        $query = mysqli_query($conn, "select * from rig where dapartemen like '%".$cari."%'"); 
                    }
                    else{
                      
                      $query = mysqli_query($conn,"SELECT `id_rig`, `tgl_masuk`, `tgl_keluar`, `description`, `asset`, `qty`, `sn`, `dapartemen`, `remark` FROM `rig` WHERE 1");
                    }
                    $no = 1;
                      while($row = mysqli_fetch_array($query)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['tgl_masuk']; ?></td>
                      <td><?php echo $row['tgl_keluar']; ?></td>
                      <td><?php echo $row['description']; ?></td>
                      <td><?php echo $row['asset']; ?></td>
                      <td><?php echo $row['qty']; ?></td>
                      <td><?php echo $row['sn']; ?></td>
                      <td><?php echo $row['dapartemen']; ?></td>
                      <td><?php echo $row['remark']; ?></td>
                      <td class="text-center">
                      <a href="edit_rig.php?id=<?php echo $row['id_rig']; ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                      <a href="hapus_rig.php?id=<?=$row['id_rig']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="fa fa-trash"></i></a>                      
                      </td>
                  </tr>

                <?php } ?> 
                </tbody>
              </table>
            </div>
 

   
    <!-- ------ -->
     <!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" ></script>
<!-- Bootstrap JS -->
<script src="/js/bootstrap.min.js" ></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
  </div>
  </body>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Datatables -->
    <script src="assets/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="assets/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script src="assets/DataTables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="assets/DataTables/Buttons-1.5.6/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="assets/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="assets/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="assets/DataTables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
    <script src="assets/DataTables/Buttons-1.5.6/js/buttons.print.min.js"></script>
    <script src="assets/DataTables/Buttons-1.5.6/js/buttons.colVis.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('.myTable').DataTable( {
                buttons: [ 'copy','csv','print', 'excel', 'pdf', 'colvis' ],
                dom: 
                "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
                "<'row'<'col-md-12'tr>>" +
                "<'row'<'col-md-5'i><'col-md-7'p>>",
                lengthMenu:[
                    [5,10,25,50,100,-1],
                    [5,10,25,50,100,"All"]
                ]
            } );
        
            table.buttons().container()
                .appendTo( '#table_wrapper .col-md-5:eq(0)' );
        } );
    </script>
</html>
