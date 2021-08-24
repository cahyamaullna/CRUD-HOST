<?php include "koneksi.php"; ?>
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
	<div class="wrapper">
		  <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Data Siswa</span>
                    </button>

                    <form class="d-flex" method="get" action="">
				      <input class="form-control me-2" type="search" placeholder="Cari Nama" aria-label="Search" name="cari" value="<?php if(isset($_GET['cari'])) { echo $_GET['cari']; } ?>">
				      <button class="btn btn-outline-success" type="submit">Cari</button>
				    </form>
                
                </div>
            </nav>
           <div id="content">
           	 <table id="example" class="table table-striped table-bordered" style="width:100%">
		        <thead>
		            <tr>
		            	<th>No</th>
		                <th>NIS</th>
		                <th>Nama</th>
		                <th>Tanggal Lahir</th>
		                <th>Rombel</th>
		                <th>Rayon</th>
		                <th>Option</th>
		                
		            </tr>
		        </thead>
		        <tbody>

		            <?php
		            $no = 1;
		            // tampilkan data

		            $query = mysqli_query($conn, "SELECT * FROM siswa");

		            if (isset($_GET['cari'])) {
		            $query = mysqli_query($conn, "SELECT * FROM siswa WHERE nama LIKE'%".
		        			$_GET['cari']."%'");
		            }

		            while ($dt = mysqli_fetch_assoc($query)) {
		         ?>
		           
		        <tr>
		        	<td><?= $no++; ?></td>
		        	<td><?= $dt['nis']; ?></td>
		        	<td><?= $dt['nama']; ?></td>
		        	<td><?= $dt['kelahiran']; ?></td>
		        	<td><?= $dt['rombel']; ?></td>
		        	<td><?= $dt['rayon']; ?></td>
		        	<td>
		        		<a href="edit.php?id=<?php echo $dt['id_siswa']?>">
		        			<button type="button" class="btn btn-warning" data-toggle="modal">Edit</button>
		        		</a>

		        		<a href="modalhapus.php?id=<?php echo $dt['id_siswa']?>" onclick="return confirm('Apakah anda yakin akan menghapus data?');">
		        		<button type="button" class="btn btn-danger" data-toggle="modal">Delete</button>
		        		</a>
						
		        	</td>
		        </tr>

		        	<?php
		         					}
		        	?>

		        </tbody>
		    </table>
			</div>
        </div>
    </div>
</body>
</html>
	<script>
			$('#myModal').on('shown.bs.modal', function () {
			 $('#myInput').trigger('focus')
			})
	</script>
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


