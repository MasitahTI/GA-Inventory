<?php 
  
  include "config.php";
  include "header.php";
 
  $id = $_GET['id'];
  $query = "SELECT * FROM produk WHERE id_produk = '$id' LIMIT 1";

  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  // var_dump($row);
  ?>

  <!-- Sidebar  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
            <!-- <span>Menu</span> -->
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>
    </div>
</nav>

                <form role="form"  method="POST" action="update_daftar.php">
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Masuk</label>
                    <input type="hidden" class="form-control" name="id_produk" value="<?php echo $row['id_produk']; ?>">
                    <input type="date" class="form-control" name="tgl_masuk" value="<?php echo $row['tgl_masuk']; ?>">
                  </div>    
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Keluar</label>
                    <input type="date" class="form-control" name="tgl_keluar" value="<?php echo $row['tgl_keluar']; ?>">
                  </div>   
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" value="<?php echo $row['nama_barang']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">User</label>
                    <input type="text" class="form-control" name="user" value="<?php echo $row['user']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">SN</label>
                    <input type="text" class="form-control" name="sn" value="<?php echo $row['sn']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Dept</label>
                    <input type="text" class="form-control" name="dept" value="<?php echo $row['dept']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">ID Asset</label>
                    <input type="text" class="form-control" name="asset" value="<?php echo $row['asset']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input type="text" class="form-control" name="kerusakan" value="<?php echo $row['kerusakan']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">ICT</label>
                    <input type="text" class="form-control" name="keterangan" value="<?php echo $row['keterangan']; ?>">
                  </div>
                  <!-- <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <select id="keterangan" class="form-control" name="keterangan">
                    <option >keterangan pakai echo php</option>
                    <option value="Belum Selesai">Belum Selesai</option>
                    <option value="Selesai">Selesai</option>
                    </select>
                  </div> -->
                  </div>
                </div>
                </div>
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
