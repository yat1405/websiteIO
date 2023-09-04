<?php
    include('include/koneksi.php'); 
    session_start();
    if (isset($_SESSION['submit'])){
        header("Location: main.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SparePart</title>

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Add New Item Form</h2>
                    <form method="post" action="include/insert.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Part Number</label>
                                    <input class="input--style-4" type="text" name="partnumber">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Maker</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="text" name="maker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Location</label>
                                    <div class="p-t-10">
                                        <input class="input--style-4" type="text" name="location" style="font-style:italic; font-size: small;" placeholder="Ex: C2(R.2C)">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">IN</label>
                                    <input class="input--style-4" type="number" name="in">
                                </div>
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Process Name</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="processname">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="Electrode Printing">Electrode Printing</option>
                                    <option value="Wire Insert">Wire Insert</option>
                                    <option value="Element Insert">Element Insert</option>
                                    <option value="Flux & Soldering">Flux & Soldering</option>
                                    <option value="Transfering">Transfering</option>
                                    <option value="Coating">Coating</option>
                                    <option value="Electrical">Electrical</option>
                                    <option value="Count & Pack">Count & Pack</option>
                                    <option value="Taping">Taping</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>  
    <script src="js/global.js"></script>

</body>

</html>
