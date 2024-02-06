
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
                    <a class="nav-link" href="diserahkan.php">Diserahkan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="data_serahterima.php">Form</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<form role="form"  method="post" action="proses_serahterima.php">
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group ">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Masukkan Description" required>
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputEmail1">Asset ID</label>
                    <input type="text" class="form-control" name="asset" placeholder="Masukkan Asset ID" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">QTY</label>
                    <input type="text" class="form-control" name="qty" placeholder="Masukkan QTY"required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">UOM</label>
                    <input type="text" class="form-control" name="uom" placeholder="Masukkan UOM"required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">REMARK</label>
                    <input type="text" class="form-control" name="remark" placeholder="Masukkan Remark"required>
                  </div>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-success float-right">Simpan</button>
                </div>
              </form>
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