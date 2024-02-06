
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
              Data Penerima
            </div>
            <div class="card-body">
              <!-- <a href="penerima.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a><br> -->
              <!-- <font size="1">*jangan masukkan lebih dari satu data</font><br> -->
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">SN</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Dapartemen</th>
                    <th scope="col">Project/Site</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('config.php');
                      $no = 1;
                      $query = mysqli_query($conn,"SELECT `id_penerima`, `nama`, `sn`, `jabatan`, `dapartemen`, `site` FROM `penerima` WHERE 1");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama']; ?></td>
                      <td><?php echo $row['sn']; ?></td>
                      <td><?php echo $row['jabatan']; ?></td>
                      <td><?php echo $row['dapartemen']; ?></td>
                      <td><?php echo $row['site']; ?></td>
                      <td class="text-center">
                        <a href="edit_penerima.php?id=<?php echo $row['id_penerima']; ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        
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
