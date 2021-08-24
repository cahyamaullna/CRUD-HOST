<?php include "koneksi.php"; 
$query = mysqli_query($conn, "SELECT * FROM siswa");

                    if (isset($_GET['cari'])) {
                    $query = mysqli_query($conn, "SELECT * FROM siswa WHERE nama LIKE'%".
                            $_GET['cari']."%'");
                    }

                    while ($dt = mysqli_fetch_assoc($query)) {

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
    <div id="content">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Edit Data</h3>
                  </div>
                  <div class="modal-body">
                    <div class="mb-3">
                        
                    <form action="update.php" method="post">
                        <input type="hidden" name="id_siswa" value="<?php echo $dt['id_siswa']; ?>">
                        <div class="form-group">
                          <label for="nis" class="form-label">NIS</label>
                          <input type="email" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS"
                          value="<?php echo $dt['nis']; ?>">
                        </div>

                        <div class="form-group">
                          <label for="nis" class="form-label">Nama</label>
                          <input type="email" class="form-control" id="nis" name="nis" placeholder="Masukkan Nama"
                          value="<?php echo $dt['nama']; ?>">
                        </div>


                        <div class="form-group">
                          <label for="kelahiran" class="form-label">Kelahiran</label>
                          <input type="date" class="form-control" id="kelahiran" name="kelahiran" placeholder=""
                          value="<?php echo $dt['kelahiran']; ?>">
                        </div>

                        <div class="form-group">
                          <label for="rombel" class="form-label">Rombel</label>
                          <input type="email" class="form-control" id="rombel" name="rombel" placeholder="contoh : RPL XII-3" value="<?php echo $dt['rombel']; ?> ">
                        </div>

                        <div class="form-group">
                          <label for="rayon" class="form-label">Rayon</label>
                          <input type="email" class="form-control" id="rayon" name="rayon" placeholder="Masukkan NIS"
                          value="<?php echo $dt['rayon']; ?> ">
                        </div>
                    </form>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary"onclick="return confirm('Apakah anda yakin akan mengedit data?');">Simpan</button>
                  </div>
                </div>
              </div>
         </div>

                    <?php
                                    }
                    ?>
</body>
</html>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>