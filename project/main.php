<?php
    include('include/koneksi.php');
    session_start();
    if (isset($_SESSION['submit'])){
      header("Location: search.php");
    }

    include('header.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Inventory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">


    <link rel="stylesheet" href="datatables/datatables.css" type="text/css">
 
    <script type="text/javascript" src="datatables/datatables.js"></script>

	</head>

  <script>
    $(document).ready(function () {
    $('#data').DataTable();
    });
  </script>

	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>  
			<div class="row">
				<div class="col-md-12"> 
					<div class="table-wrap">
						<table id="data" data-page-length='5' class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>NO</th>                     <!-- Nomor -->
					        <th>Name</th>                   <!-- Name -->
                  				<th>Process Name</th>           <!-- Process Name -->
					        <th>Part Number</th>            <!-- Part Number  -->
					        <th>Maker</th>                  <!-- Maker -->
					        <th>IN</th>               	<!-- Quantity (yg masuk)-->
                            			<th>OUT</th>			<!-- Quantity (yg diambil) -->
                  				<th>Balance</th>                <!-- sisa dari barang yg diambil -->
                  				<th>Location</th>               <!-- lokasi barang -->
                  				<th>Remark</th>			<!-- Keterangan -->	
					      </tr>
					    </thead>
					    <tbody>
               <?php
                  $result = mysqli_query($koneksi, "SELECT * FROM inventory");
                  $no = 1;                 
                  while($data = mysqli_fetch_array($result)){
                ?>
                <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['processname'] ?></td>
                <td><?php echo $data['partnumber'] ?></td>
                <td><?php echo $data['maker'] ?></td>
                <td><?php echo $data['input']?></td>
                <td><?php echo $data['output']?></td>
                <td><?php echo $data['balance'] ?></td>
                <td><?php echo $data['location'] ?></td>
                <td><a href="in.php?partnumber=<?php echo $data['partnumber'];?>" class="btn btn-primary">in  </a> <a href="out.php?partnumber=<?php echo $data['partnumber'];?>" class="btn btn-primary">out</a></td>
                </tr>
                <?php
                  }
                ?>
					    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

	</body>
</html>

