<?php
    include('include/koneksi.php');
    $partnumber = $_GET['partnumber'];
    session_start();
    if (isset($_SESSION['submit'])){
      header("Location: main.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Inventory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center"></div>

      <form method="post" action="include/output.php">

			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center mb-4"></h4>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>Name</th>             <!-- Name -->
                  <th>Process Name</th>     <!-- Process Name -->
					        <th>Part Number</th>      <!-- Part Number  -->
					        <th>Maker</th>            <!-- Maker -->
					        <th>OUT</th>              <!-- Quantity (yg diambil)-->
                  <th>Balance</th>          <!-- sisa dari barang yg diambil -->
                  <th>Location</th>         <!-- lokasi barang -->
                  <th>Remark</th>
					      </tr>
					    </thead>
					    <tbody>
                  <?php
                    $result = mysqli_query($koneksi, "SELECT * FROM inventory WHERE partnumber = '$partnumber'");
                    $no = 1;
                    $data = mysqli_fetch_array($result);
                    ?>
                      <tr>
                        <td>
                          <?php echo $data['name']?>
                        </td>
                        <td>
                           <?php echo $data['processname']?>
                        </td>
                        <td>
                          <?php echo $data['partnumber']?>
                          <input type="hidden" name="partnumber" value="<?php echo $data['partnumber']?>">
                        </td>
                        <td>
                          <?php echo $data['maker']?> 
                        </td>
                        <td>
                          <input type="number" name="qtyout" value="<?php echo $data['output']?>">
                        </td>
                        <td>
                          <?php echo $data['balance']?>
                        </td>
                        <td>
                          <?php echo $data['location']?>
                        </td>
                        <td>
                        <input type="submit" value="Submit">
                        </td>
                        </tr>
					    </tbody>
					  </table>
					</div>
				</div>
			</div>
    </form>
		</div>
	</section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

	</body>
</html>

