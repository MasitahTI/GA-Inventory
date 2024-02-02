
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
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="data_penerima.php">Penerima</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="data_diserahkan.php">Diserahkan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="data_serahterima.php">Form</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- ------ -->

            <div class="card-header">
              Data Barang
            </div>
            
            <div class="card-body">
              <a href="serahterima.php" class="btn btn-md btn-success" style="margin-bottom: 10px"><i class="fa fa-plus"></i></a>
              <a href="cetak_serahterima.php" class="btn btn-md btn-danger" style="margin-bottom: 10px">CETAK PDF</a>

              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Description</th>
                    <th scope="col">Asset ID</th>
                    <th scope="col">QTY</th>
                    <th scope="col">UOM</th>
                    <th scope="col">REMARK</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('config.php');
                      $no = 1;
                      $query = mysqli_query($conn,"SELECT `id_serahterima`, `description`, `asset`, `qty`, `uom`, `remark` FROM `serahterima` WHERE 1");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['description']; ?></td>
                      <td><?php echo $row['asset']; ?></td>
                      <td><?php echo $row['qty']; ?></td>
                      <td><?php echo $row['uom']; ?></td>
                      <td><?php echo $row['remark']; ?></td>
                      <td class="text-center">
                        <a href="edit_serahterima.php?id=<?php echo $row['id_serahterima']; ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="hapus_serahterima.php?id=<?=$row['id_serahterima']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="fa fa-trash"></i></a>                      </td>
                        
                      </td>
                  </tr>

                <?php } ?> 
                </tbody>
              </table>
            </div>
 

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
    <!-- ------ -->
     <!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
  </body>
</html>
